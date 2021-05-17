<?php

require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

function getParams(&$amount, &$period, &$interest) {
    
    $amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
    $period = isset($_REQUEST['period']) ? $_REQUEST['period'] : null;
    $interest = isset($_REQUEST['interest']) ? $_REQUEST['interest'] : null;
}

function validateParams(&$amount, &$period, &$interest, &$messages) {
    
    if (!(isset($amount) && isset($period) && isset($interest))) { return false; }
    if ($amount == "") { $messages [] = 'Wprowadź kwotę kredytu'; }
    if ($period == "") { $messages [] = 'Wprowadź okres'; }
    if ($interest == "") { $messages [] = 'Wprowadź oprocentowanie'; }
    if (count($messages) != 0) return false;
    if (!is_numeric($amount)) { $messages [] = 'Kwota musi być liczbą całkowitą'; }
    if (!is_numeric($period)) { $messages [] = 'Okres musi być liczbą całkowitą'; }
    if (!is_numeric($interest)) { $messages [] = 'Oprocentowanie musi być liczbą (jako separatora użyj KROPKI)'; }
    if (count ( $messages ) != 0) return false;
        else return true;
}

function process(&$amount, &$period, &$interest, &$months, &$monthly_instalment, &$monthly_intalment_interest, &$result) {
    
    $amount = intval($amount);
    $period = intval($period);
    $interest = floatval($interest);
    
    $months = $period * 12;
    $monthly_instalment = $amount / $months;
    $monthly_instalment_interest = $monthly_instalment * ($interest / 100);
    $result = number_format($monthly_instalment + $monthly_instalment_interest, 2, ',', ' ');
}

$amount = null;
$period = null;
$interest = null;
$months = null;
$monthly_instalment = null;
$monthly_instalment_interest = null;
$result = null;
$messages = array();

getParams($amount, $period, $interest);
if (validateParams($amount, $period, $interest, $messages)) {
    process($amount, $period, $interest, $months, $monthly_instalment, $monthly_intalment_interest, $result);
}
       
include 'calc_cred_view.php';