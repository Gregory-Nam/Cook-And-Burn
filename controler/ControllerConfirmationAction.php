<?php
//include('../view/viewSignUp
//include('./model/User.php');
//include ('ControllerSignUpAction.php');
error_reporting(E_ALL);
ini_set('display-errors','on');

class ControllerConfirmationAction
{
    private $test;
    public function __construct()
    {
        $this->verif();
    }

    public function verif()
    {
    	if(empty($_POST['pseudo']) || empty($_POST['cleSecrete'])){
            echo 'Remplir les champs';
        }
        else{
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $key = htmlspecialchars($_POST['cleSecrete']);
            $aUser = new User($pseudo,"","", $key);
            $test = new UserModel();
            if($test->verifUserValid($aUser)== true){
                $test->confirmUser($aUser);
                echo 'ok';
            }
            else{
                echo 'Pas de cohérence';
            }
        }
    	
    }
}

?>

