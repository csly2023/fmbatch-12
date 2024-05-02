<?php

require_once "vendor/autoload.php";
use App\classes\HelloWorld;
use App\classes\Home;

//$helloWorld= new HelloWorld();
//$helloWorld->index();

$helloworld= new HelloWorld();
$helloworld->index();




//Notes:
//For vendor file creation comment= composer dump-autoload
//gettype ()= method for php data type check