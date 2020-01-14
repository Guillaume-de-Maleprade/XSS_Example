<?php 

require_once($_SERVER['DOCUMENT_ROOT']."/XSS_Example/View.php");


$array = [];

$array += ["javascript_js" => "index.js"];

View::render("base.html", $array);