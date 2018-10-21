<?php
//include('../view/viewSignUp
//include('./model/User.php');
//include ('ControllerSignUpAction.php');
session_start();
error_reporting(E_ALL);
ini_set('display-errors','on');

class ControllerModifierRecAction
{
    private $test;
    public function __construct()
    {
        $this->ModifRec();
    }


    public function ModifRec()
    {

        $rM = new RecetteModel();
        $ancienneRec = $rM->getByTitre($_SESSION['recette']);
        print_r($_POST['nameRecette']);
        echo "<br/>";

        print_r($_POST['descriptionRecette']);
        echo "<br/>";

        print_r($_POST['descriptionRecette2']);
        echo "<br/>";

        print_r($_POST['ingredientRecette']);
        echo "<br/>";

        print_r($_FILES['imageRecette']);
        echo "<br/>";


        if(!isset($_POST['nameRecette']) || !isset($_POST['descriptionRecette']) || !isset($_POST['descriptionRecette2'])
                    || !isset($_POST['ingredientRecette']))
        {

        }
        else
        {


        $nombreEtape =  count(explode ("\n", $ancienneRec->getEtapesNl()));
        $lesEtapes = "";
        echo $nombreEtape;
        for($j = 1; $j <= $nombreEtape; ++$j)
        {
            echo "for";
            if(empty($_POST['etape_'.$j]))
            {
                echo "empty";
                continue;
            }
            echo $_POST['etape_'.$j];
            $lesEtapes.= preg_replace( "/\r|\n/"," ",$_POST['etape_'.$j]). "<br/>";
        }
        echo $lesEtapes;

        //on enleve le dernier <br/> pour que on ai pas un textarea en plus dans modifier recette
        $lesEtapes = substr($lesEtapes, 0,-5);


        if(empty($_FILES['imageRecette']['name']))
        {
            $rec = new Recette($_POST['nameRecette'],$_POST['descriptionRecette'],
                $_POST['descriptionRecette2'], $lesEtapes, $_SESSION['pseudo'],
                $_POST['ingredientRecette'], $ancienneRec->getImage(),
                $_POST['nombrePersonne'],$ancienneRec->getNombreBurn());
        }
        else
        {
            $rec = new Recette($_POST['nameRecette'],$_POST['descriptionRecette'],
                $_POST['descriptionRecette2'],$lesEtapes, $_SESSION['pseudo'],
                $_POST['ingredientRecette'], $_FILES['imageRecette']['name'],
                $_POST['nombrePersonne'],$ancienneRec->getNombreBurn());
            move_uploaded_file($_FILES['imageRecette']['tmp_name'], './files/'.$rec->getImage());
            unlink('./files/'.$ancienneRec->getImage());
        }
        $rec->setId($ancienneRec->getId());
        $rM->updateRec($rec);
        header("location:ContenuRecette?id=".urlencode($rec->getTitre()));
        }



    }
}

?>