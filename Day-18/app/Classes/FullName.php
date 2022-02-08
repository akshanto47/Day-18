<?php


namespace App\Classes;


class FullName
{
    public $firstName;
    public $lastName;


    public function __construct($data)
    {

       $this->firstName = $data['first_name'];
       $this->lastName = $data['last_name'];
    }

    public function index()
    {

      header('Location: action.php?pages=full-name');


    }

    public function getFullName(){
        echo $this->lastName;
    }
}