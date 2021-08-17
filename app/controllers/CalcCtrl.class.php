<?php

namespace app\controllers;

use lib\smarty\Smarty;
use core\Messages;
use app\forms\CalcForm;
use app\transfers\CalcResult;
use Medoo\Medoo;

class CalcCtrl {

    private $form;
    private $msgs;
    private $result;
    private $hide_intro;

    public function __construct() {

        $this->form = new CalcForm();
        $this->msgs = new Messages();
        $this->result = new CalcResult();
        $this->hide_intro = false;
    }

    public function getParams() {

        $this->form->amount = getFromRequest('amount');
        $this->form->period = getFromRequest('period');
        $this->form->interest = getFromRequest('interest');
    }

    public function validate() {

        if (!(isset($this->form->amount) && isset($this->form->period) && isset($this->form->interest))) {
            return false;
        } else {
            $this->hide_intro = true;
        }

        if ($this->form->amount == "") {
            $this->msgs->addError('Wprowadź kwotę kredytu');
        }
        if ($this->form->period == "") {
            $this->msgs->addError('Wprowadź okres');
        }
        if ($this->form->interest == "") {
            $this->msgs->addError('Wprowadź oprocentowanie');
        }

        if (!$this->msgs->isError()) {


            if (!is_numeric($this->form->amount)) {
                $this->msgs->addError('Kwota musi być liczbą całkowitą');
            }

            if (!is_numeric($this->form->period)) {
                $this->msgs->addError('Okres musi być liczbą całkowitą');
            }

            if (!is_numeric($this->form->interest)) {
                $this->msgs->addError('Oprocentowanie musi być liczbą (jako separatora użyj KROPKI)');
            }
        }

        return !$this->msgs->isError();
    }

    public function action_calcCompute() {

        $this->getParams();

        if ($this->validate()) {

            $this->form->amount = intval($this->form->amount);
            $this->form->period = intval($this->form->period);
            $this->form->interest = floatval($this->form->interest);

            $months = $this->form->period * 12;
            $monthly_instalment = $this->form->amount / $months;
            $monthly_instalment_interest = $monthly_instalment * ($this->form->interest / 100);
            $this->result->result = number_format($monthly_instalment + $monthly_instalment_interest, 2, ',', ' ');
        }

        try {
            $database = new \Medoo\Medoo([
                'type' => 'mysql',
                'host' => 'localhost',
                'database' => 'kalkulator',
                'username' => 'root',
                'password' => '',
                'charset' => 'utf8',
                'collation' => 'utf8_polish_ci',
                'port' => 3306,
                'option' => [
                    \PDO::ATTR_CASE => \PDO::CASE_NATURAL,
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                ]
            ]);

            $database->insert("result", [
                "amount" => $this->form->amount,
                "period" => $this->form->period,
                "interest" => $this->form->interest,
                "installment" => $this->result->result,
                "date" => date("Y-m-d")
            ]);
        } catch (\PDOException $ex) {
            getMessages()->addError("DB Error: " . $ex->getMessage());
        }
        
        $this->generateView();
    }

    public function action_calcShow() {
        getMessages()->addInfo('Witaj w kalkulatorze');
        $this->generateView();
    }

    public function generateView() {

        getSmarty()->assign('user', unserialize($_SESSION['user']));

        getSmarty()->assign('page_title', 'Aplikacje internetowe');
        getSmarty()->assign('page_description', 'Praca własna w ramach przedmiotu: Aplikacje internetowe');
        getSmarty()->assign('page_header', 'Szablony Smarty');

        getSmarty()->assign('msgs', $this->msgs);
        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('res', $this->result);

        getSmarty()->assign('hide_intro', $this->hide_intro);

        getSmarty()->display('CalcView.tpl');
    }

}
