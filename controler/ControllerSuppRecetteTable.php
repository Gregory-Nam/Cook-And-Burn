<<<<<<< HEAD
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
        $_SESSION['profilASup'] = substr(strrchr($_SERVER['REQUEST_URI'], '='), 1);
        $idPro = htmlspecialchars($_SESSION['profilASup']);
        $test = new RecetteModel();
        $test->suppRecette($idPro);
                
        header("Location:recetteTable");
        
            
    
        
    	
    	
    }
}

?>
=======
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
        $_SESSION['profilASup'] = substr(strrchr($_SERVER['REQUEST_URI'], '='), 1);
        $idPro = htmlspecialchars($_SESSION['profilASup']);
        $test = new RecetteModel();
        $test->suppRecette($idPro);
                
        header("Location:recetteTable");
        
            
    
        
    	
    	
    }
}

?>
>>>>>>> 9ef997bd488d871ae5f16f72e2abfd1d6678e0b1
