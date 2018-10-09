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
        if(empty($_POST['nameRecette']) || empty($_POST['descriptionRecette']) || empty($_POST['ingredientRecette']) || empty($_POST['imageRecette']) || empty($_POST['nombrePersonne'])){
            echo 'Remplir les champs';
        }
        else{
            $nomRecette = htmlspecialchars($_POST['nameRecette']);
            $descriptionRecette = htmlspecialchars($_POST['descriptionRecette']);
            $ingredientRecette = htmlspecialchars($_POST['ingredientRecette']);
            $imageRecette = htmlspecialchars($_POST['imageRecette']);
            $nombrePersonne = htmlspecialchars($_POST['nombrePersonne']);
            $test = new RecetteModel(array($nomRecette, $descriptionRecette, $_SESSION['pseudo'], $ingredientRecette, $imageRecette, $nombrePersonne));
            $aRecette = new Recette($nomRecette,$descriptionRecette, $_SESSION['pseudo'], $ingredientRecette, $imageRecette, $nombrePersonne);
            if($nombrePersonne <= 0 ){
                echo 'Le nombre de personne doit au moins être égale à 1';
            }
            else{
                $test->insertRecette($aRecette);
                echo 'Ok';
                
            }
        }

    }
}

?>