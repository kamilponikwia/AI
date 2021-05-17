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

<form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post" class="pure-form pure-form-stacked">
    <legend><b><h1>Logowanie</h1></b></legend>
	<fieldset>
            <label for="id_login">Login</label>
	    <input id="id_login" type="text" name="login" value="<?php out($form['login']); ?>" />
	    <label for="id_pass">Hasło</label>
	    <input id="id_pass" type="password" name="pass" />
	</fieldset>
    
	<input type="submit" value="Zaloguj" class="pure-button pure-button-primary"/>
</form>	

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

</div>

</body>
</html>