<?php

//config.php


require_once 'vendor/autoload.php';

$google_client = new Google_Client();


$google_client->setClientId('897301713373-40i4qb63f1ceo9oio8oujmc0amkk397i.apps.googleusercontent.com');


$google_client->setClientSecret('ueTMefNcdcwruWkFmly7tkWf');


$google_client->setRedirectUri('http://localhost/test2/index.php');

$google_client->addScope('email');

$google_client->addScope('profile');

 
session_start();

?>