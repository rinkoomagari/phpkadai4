<?php
echo 'session01.phpです';
session_start();
$sid = session_id();

var_dump($sid);

$_SESSION['name'] = 'rinko';
$_SESSION['age'] = 36;
$_SESSION['lovefood'] = 'tomato';
$birthPlace = 'yokohama';
