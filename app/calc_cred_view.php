<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc_cred.php" method="get">
	<label for="id_amount">Kwota kredytu:</label>
	<input id="id_amount" type="text" name="amount" value="<?php if (isset($amount)) print($amount); ?>" />
	<label for="id_amount">zł</label><br><br>
	
	<label for="id_period">Okres:</label>
	<input id="id_period" type="text" name="period" value="<?php if (isset($period)) print($period); ?>" />
	<label for="id_period">lat/a</label><br><br>
	
	<label for="id_interest">Oprocentowanie:</label>
	<input id="id_interest" type="text" name="interest" value="<?php if (isset($interest)) print($interest); ?>" />
	<label for="id_interest">%</label><br><br>

	<input type="submit" value="Oblicz" />
</form>	

<?php

if (isset($messages)) {

	echo '<ol style="margin: 20px 0px 0px 0px; padding: 10px 10px 10px 30px; border-radius: 10px; background-color: #f88; width:250px;">';
	foreach ( $messages as $msg ) {
		echo '<li>'.$msg.'</li>';
	}
	echo '</ol>';
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px 0px 0px 0px; padding: 10px; border-radius: 10px; background-color: #87ceeb; width:250px;">
<?php echo 'Misięczna rata wynosi: '.$result.' zł'; ?>
</div>
<?php } ?>

</body>
</html>