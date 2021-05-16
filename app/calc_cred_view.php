<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" 
      xml:lang="pl" 
      lang="pl">
<head>
    <meta name="viewport" 
          content="width=device-width, initial-scale=1">
    <link rel="stylesheet" 
          href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" 
          integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" 
          crossorigin="anonymous">
</head>
<body>

<div style="width:90%; margin: 2em auto;">
    
<form action="<?php print(_APP_URL);?>/app/calc_cred.php" method="post" class="pure-form pure-form-stacked">
    
    <legend><b><h1>Kalkulator kredytowy</h1></b></legend>
    <fieldset>
      
        <label for="id_amount">Kwota kredytu</label>
        <input id="id_amount" 
               type="text" 
               name="amount" 
               placeholder="zł"
               value="<?php if (isset($amount)) print($amount); ?>" 
               />
                
        <label for="id_period">Okres</label>
	<input id="id_period" 
               type="text" 
               name="period" 
               placeholder="lat/a"
               value="<?php if (isset($period)) print($period); ?>" 
               />
	
	<label for="id_interest">Oprocentowanie</label>
	<input id="id_interest" 
               type="text" 
               name="interest" 
               placeholder="%"
               value="<?php if (isset($interest)) print($interest); ?>" 
               />
        
        <button type="submit" class="pure-button pure-button-primary">Oblicz</button>
        
    </fieldset>	
</form>	
    
<div style="width:100%; margin: 3em auto;">
    <a href="<?php print(_APP_ROOT); ?>/app/next_page.php" class="pure-button pure-button-primary">Następna strona</a>
    <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-primary-active">Wyloguj</a>
</div>

<?php

if (isset($messages)) {
    
    if (count($messages) > 0) {
        echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.1em; background-color: #f88; width:25em;">';
	foreach ($messages as $msg) {
            echo '<li>'.$msg.'</li>';
            }
            echo '</ol>';
    }
}
?>

<?php if (isset($result)){ ?>
<div style="margin-top: 1em; padding: 1em; border-radius: 0.1em; background-color: #87ceeb; width:25em;">
<?php echo 'Misięczna rata wynosi: '.$result.' zł'; ?>
</div>
<?php } ?>
    
</div>

</body>
</html>