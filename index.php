<?php

require_once  'vendor/autoload.php'; //link-up file
use App\classes\HelloWorld; //namespace+class name

$helloWorld = new HelloWorld();
$helloWorld->index();