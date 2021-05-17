<?php

require_once dirname(__FILE__).'/../../config.php';

function getLoginParams(&$form){
    $form['login'] = isset ($_REQUEST ['login']) ? $_REQUEST ['login'] : null;
    $form['pass'] = isset ($_REQUEST ['pass']) ? $_REQUEST ['pass'] : null;
}

function validateLoginParams(&$form,&$messages){

    if (!(isset($form['login']) && isset($form['pass']))) { return false; }
    if ($form['login'] == "") { $messages [] = 'Proszę podać login'; }
    if ($form['pass'] == "") { $messages [] = 'Proszę podać hasło'; }
    if (count($messages) > 0) return false;
    if ($form['login'] == "admin" && $form['pass'] == "admin") {
        session_start();
        $_SESSION['role'] = 'admin';
        return true;
    }
    if ($form['login'] == "user" && $form['pass'] == "user") {
        session_start();
        $_SESSION['role'] = 'user';
        return true;
    }
    $messages [] = 'Niepoprawny login lub hasło';
    return false;
}

$form = array();
$messages = array();

getLoginParams($form);

if (!validateLoginParams($form,$messages)) {
    include _ROOT_PATH.'/app/security/login_view.php';
} else { 
    header("Location: "._APP_URL);
}