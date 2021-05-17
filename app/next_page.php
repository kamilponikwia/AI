<?php

require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';
?>

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
    <a href="<?php print(_APP_ROOT); ?>/app/calc_cred.php" class="pure-button pure-button-primary">Wróć do kalkulatora</a>
    <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-primary-active">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">
    <p>To jest następna strona aplikacji internetowej</p>
</div>	

</body>
</html>