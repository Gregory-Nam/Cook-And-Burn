<?php
session_start();
//include('../view/viewSignUp
//include('./model/User.php');
//include ('ControllerSignUpAction.php');
error_reporting(E_ALL);
ini_set('display-errors','on');

class ControllerCommentaireRecette
{
    private $test;
    public function __construct()
    {
        $this->verif();
    }

    public function verif()
    {;
        if(empty($_SESSION['pseudo']))
        {
            echo 'Vous devez vous connecter';
        }
        else
        {
            if(empty($_POST['commentaireRecette']))
            {
            echo 'vide';
            }
            else
            {
                $commentaire = htmlspecialchars($_POST['commentaireRecette']);
                $test = new RecetteModel();
                $test->postCommentaire($commentaire,$_SESSION['pseudo'],$_SESSION['recette']);
                header('Location:ContenuRecette?id='.$_SESSION['recette']);
            }
        }
    	
    }
}
?>