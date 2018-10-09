<?php
//include('../view/viewSignUp
//include('./model/User.php');
//include ('ControllerSignUpAction.php');
session_start();
error_reporting(E_ALL);
ini_set('display-errors','on');

class ControllerRecetteAction
{
    private $test;
    public function __construct()
    {
        $this->ajoutRecette();
    }

    public function ajoutRecette()
    {
        echo 'coucu';

    }
}

?>