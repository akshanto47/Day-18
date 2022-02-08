<?php
require_once 'vendor/autoload.php';
use App\classes\Example;
use App\Classes\FullName;

$example = new Example();
$example->index();
$fullName = new FullName('Rajib');
$fullName->index();

