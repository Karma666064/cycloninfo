<?php
session_start();

global $baseUrl; $baseUrl = 'http://localhost/cycloninfo/src';  
global $isConnected; $isConnected = $_SESSION && $_SESSION['user'];
global $pageHere;

if (!isset($_GET['page'])) $pageHere = 'home';
else $pageHere = $_GET['page'];

foreach (glob('controllers/*.php') as $fileName) require_once $fileName;
foreach (glob('models/*.php') as $fileName) require_once $fileName;
foreach (glob('templates/*.php') as $fileName) require_once $fileName;
foreach (glob('templates/sprites/*.php') as $fileName) require_once $fileName;
?>