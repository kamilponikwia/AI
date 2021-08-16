<?php

require_once $conf->root_path . '/lib/smarty/Smarty.class.php';
require_once $conf->root_path . '/core/Messages.class.php';
require_once $conf->root_path . '/app/controllers/CalcForm.class.php';
require_once $conf->root_path . '/app/controllers/CalcResult.class.php';

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

        $this->form->amount = isset($_REQUEST ['amount']) ? $_REQUEST ['amount'] : null;
        $this->form->period = isset($_REQUEST ['period']) ? $_REQUEST ['period'] : null;
        $this->form->interest = isset($_REQUEST ['interest']) ? $_REQUEST ['interest'] : null;
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

    public function process() {

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

        $this->generateView();
    }

    public function generateView() {
        global $conf;

        $smarty = new Smarty();
        $smarty->assign('conf', $conf);

        $smarty->assign('page_title', 'Aplikacje internetowe');
        $smarty->assign('page_description', 'Praca własna w ramach przedmiotu: Aplikacje internetowe');
        $smarty->assign('page_header', 'Szablony Smarty');

        $smarty->assign('msgs', $this->msgs);
        $smarty->assign('form', $this->form);
        $smarty->assign('res', $this->result);

        $smarty->assign('hide_intro', $this->hide_intro);

        $smarty->display($conf->root_path . '/app/views/CalcView.tpl');
    }

}