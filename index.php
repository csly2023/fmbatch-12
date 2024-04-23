<?php

require_once "vendor/autoload.php";
use App\classes\HelloWorld;

$helloWorld= new HelloWorld();
$helloWorld->index();




//Notes:
//For vendor file creation comment= composer dump-autoload
//gettype ()= method for php data type check