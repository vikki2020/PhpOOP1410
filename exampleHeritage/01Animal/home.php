<?php

require_once  "cat.class.php";
require_once "dog.class.php";
$cat1 = new cat("mimi", "blue", "black", "6kg");
$dog1 = new dog("lala", "green", "pink", "10kg", "labulado");

var_dump($cat1);
echo "<br>";
$cat1->selfVoice();
echo "<br>";
var_dump($dog1);
echo "<br>";
$dog1->selfVoice();
echo "<br>";
$dog1->eat();
