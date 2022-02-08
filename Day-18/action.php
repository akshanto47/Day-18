<?php
require_once 'vendor/autoload.php';
use App\Classes\FullName;

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'full-name')
    {
        include 'pages/full-name.php';
    }
}

elseif (isset($_GET['btn']))
{

    $fullName = new FullName($_POST);
    $fullName->getFullName();
}