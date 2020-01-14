<?php
require_once($_SERVER['DOCUMENT_ROOT']."/XSS_Example/View.php");

$username = $_GET['username'];
$password = $_GET['password'];

$hashed_pass = password_hash($password, PASSWORD_DEFAULT);


$array = [];
$array += ["javascript_js" => "index.js"];
$array += ["username" => $username];

View::render("user.html", $_GET);
//View::render("user.html", $array);
