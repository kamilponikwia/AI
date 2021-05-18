FF<?php
require_once dirname(__FILE__) . '/../config.php';
require_once _ROOT_PATH . '/lib/smarty/Smarty.class.php';

function getParams(&$form) {
    $form['amount'] = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
    $form['period'] = isset($_REQUEST['period']) ? $_REQUEST['period'] : null;
    $form['interest'] = isset($_REQUEST['interest']) ? $_REQUEST['interest'] : null;
}

function validate(&$form, &$msgs, &$hide_intro) {

    if (!(isset($form['amount']) && isset($form['period']) && isset($form['interest']) )) {
        return false;
    }

    $hide_intro = true;

    if ($form['amount'] == "") {
        $msgs [] = 'Wprowadź kwotę kredytu';
    }
    if ($form['period'] == "") {
        $msgs [] = 'Wprowadź okres';
    }
    if ($form['interest'] == "") {
        $msgs [] = 'Wprowadź oprocentowanie';
    }

    if (count($msgs) == 0) {
        if (!is_numeric($form['amount'])) {
            $msgs [] = 'Kwota musi być liczbą całkowitą';
        }
        if (!is_numeric($form['period'])) {
            $msgs [] = 'Okres musi być liczbą całkowitą';
        }
        if (!is_numeric($form['interest'])) {
            $msgs [] = 'Oprocentowanie musi być liczbą (jako separatora użyj KROPKI)';
        }
    }

    if (count($msgs) > 0) {
        return false;
    } else {
        return true;
    }
}

function process(&$form, &$msgs, &$result, &$months, &$monthly_instalment, &$monthly_instalment_interest) {

    $form['amount'] = intval($form['amount']);
    $form['period'] = intval($form['period']);
    $form['interest'] = floatval($form['interest']);

    $months = $form['period'] * 12;
    $monthly_instalment = $form['amount'] / $months;
    $monthly_instalment_interest = $monthly_instalment * ($form['interest'] / 100);
    $result = number_format($monthly_instalment + $monthly_instalment_interest, 2, ',', ' ');
}

$form = null;
$months = null;
$monthly_instalment = null;
$monthly_instalment_interest = null;
$messages = array();
$result = null;
$hide_intro = false;

getParams($form);
if (validate($form, $messages, $hide_intro)) {
    process($form, $msgs, $result, $months, $monthly_instalment, $monthly_instalment_interest);
}

$smarty = new Smarty();

$smarty->assign('app_url', _APP_URL);
$smarty->assign('root_path', _ROOT_PATH);
$smarty->assign('page_title', 'Aplikacje internetowe');
$smarty->assign('page_description', 'Praca własna w ramach przedmiotu: Aplikacje internetowe');
$smarty->assign('page_header', 'Szablony Smarty');
$smarty->assign('hide_intro', $hide_intro);
$smarty->assign('form', $form);
$smarty->assign('result', $result);
$smarty->assign('messages', $messages);

$smarty->display(_ROOT_PATH . '/app/calc_cred.html');
