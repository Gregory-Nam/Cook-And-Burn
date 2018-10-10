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
        if(!empty($_FILES))
        {
            if(empty($_POST['nameRecette']) || empty($_POST['descriptionRecette']) || empty($_POST['descriptionRecette2']) || empty($_POST['ingredientRecette']) || empty($_POST['nombrePersonne']))
            {
                echo 'Remplir les champs';
                echo 'Nom : '. $_POST['nameRecette'];
                echo 'Desc : '. $_POST['descriptionRecette'];
                echo 'Ing : '. $_POST['ingredientRecette'];
                
                echo 'Nbr : '.$_POST['nombrePersonne'];
            }
            else
            {
            $file_name = $_FILES['imageRecette']['name'];
            $file_extension = strrchr($file_name, "."); //Derniere itération du point

            $file_tmp_name = $_FILES['imageRecette']['tmp_name'];
            $destination ='./files/'.$file_name;

            $extensions_autorisees = array('.png', '.jpg');

 

            $nomRecette = htmlspecialchars($_POST['nameRecette']);
            $descriptionRecette = htmlspecialchars($_POST['descriptionRecette']);
            $descriptionRecetteDet = htmlspecialchars($_POST['descriptionRecette2']);
            $ingredientRecette = htmlspecialchars($_POST['ingredientRecette']);
            //$imageRecette = htmlspecialchars($_POST['imageRecette']);
            $nombrePersonne = htmlspecialchars($_POST['nombrePersonne']);
            $test = new RecetteModel();
            $aRecette = new Recette($nomRecette,$descriptionRecette, $descriptionRecetteDet,$_SESSION['pseudo'], $ingredientRecette, $file_name, $nombrePersonne);
                if($nombrePersonne <= 0 )
                {
                    echo 'Le nombre de personne doit au moins être égale à 1';
                }
                else
                {
                    if(in_array($file_extension, $extensions_autorisees))
                    {
                    move_uploaded_file($file_tmp_name, $destination);
                    $test->insertRecette($aRecette); 
                    echo 'Recette ajouté';

                    }
                    else{
                        echo 'Extension autorisé : png et jpg';
                    }  
                }
            }
        }
        else{
            echo 'pas vide';
        }
        

    }
}

?>