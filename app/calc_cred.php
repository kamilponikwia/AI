<?php
require_once dirname(__FILE__).'/../config.php';

$amount = $_REQUEST ['amount'];
$period = $_REQUEST ['period'];
$interest = $_REQUEST ['interest'];

if (!(isset($amount) && isset($period) && isset($interest))) {
	$messages [] = 'Nie podano jednego lub więcej z wymaganych parametrów';
}

if ($amount == "") {
	$messages [] = 'Wprowadź kwotę kredytu';
}
if ($period == "") {
	$messages [] = 'Wprowadź okres';
}

if ($interest == "") {
	$messages [] = 'Wprowadź oprocentowanie';
}

if (empty($messages)) {
	
	if (!is_numeric($amount)) {
		$messages [] = 'Kwota musi być liczbą całkowitą';
	}
	
	if (!is_numeric($period)) {
		$messages [] = 'Okres musi być liczbą całkowitą';
	}
	if (!is_numeric($interest)) {
		$messages [] = 'Oprocentowanie musi być liczbą (jako separatora użyj KROPKI)';
	}	
}

if (empty($messages)) {
	
	$amount = intval($amount);
	$period = intval($period);
	$interest = floatval($interest);
	
	$months = $period * 12;
	$monthly_instalment = $amount / $months;
	$monthly_instalment_interest = $monthly_instalment * ($interest / 100);
	$result = number_format($monthly_instalment + $monthly_instalment_interest, 2, ',', ' ');
}

include 'calc_cred_view.php';