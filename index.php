<?php
header('Access-Control-Allow-Origin: http://localhost:3000');
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
require_once 'bootstrap.php';
$app = new App();