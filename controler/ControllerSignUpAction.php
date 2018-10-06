<?php
//include('../view/viewSignUp
//include('./model/User.php');
//include ('ControllerSignUpAction.php');

class ControllerSignUpAction
{
    private $test;
    public function __construct()
    {
        $this->verif();
    }

    public function verif()
    {
        if(empty($_POST['name']) || empty($_POST['password']) || empty($_POST['mail']))
        {
            echo "Il faut tout remplir";
            //header('location:Index');
        }
        else
        {
            $nameUser = $_POST['name'];
            $firstNameUser = $_POST['password'];
            $mailUser = $_POST['mail'];
            $aUser = new User($nameUser,$firstNameUser, $mailUser);


            try
            {
                $test = new UserModel();
                $test->insertUser($aUser);

            }
            catch(PDOException $e)
            {
                die('Error : ' . $e->getMessage());
            }
            echo "lol";
            echo $aUser->getNameUser();
            //header('location:Index');
        }
    }
}








?>