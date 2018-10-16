<?php
session_start();
//include('../view/viewSignUp
//include('./model/User.php');
//include ('ControllerSignUpAction.php');
error_reporting(E_ALL);
ini_set('display-errors','on');

class ControllerSuppRecetteTable
{
    private $test;
    public function __construct()
    {
        $this->verif();
    }

    public function verif()
    {
        $idPro = htmlspecialchars($_SESSION['profilSup']);
        $test = new RecetteModel();
        $test->suppRecette($idPro);
                
        header("Location:recetteTable");
        
            
    
        
    	
    	
    }
}

?>
