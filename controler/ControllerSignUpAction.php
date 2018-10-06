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
        if(empty($_POST['name']) || empty($_POST['password']) || empty($_POST['mail'] || empty($_POST['password2'])))
        {
            echo "Il faut tout remplir";
            //header('location:Index');
        }
        else
        {
            $nameUser = htmlspecialchars($_POST['name']);
            $firstNameUser = sha1($_POST['password']);
            $firstNameUser2 = sha1($_POST['password2']);
            $mailUser = htmlspecialchars($_POST['mail']);
            $mailUser2 = htmlspecialchars($_POST['mail2']);
            $aUser = new User($nameUser,$firstNameUser, $mailUser);
            $pseudolength = strlen($nameUser);
            if($pseudolength <= 255){
                if($firstNameUser == $firstNameUser2){
                    if($mailUser == $mailUser2){
                        if(filter_var($mailUser, FILTER_VALIDATE_EMAIL)){
                            try
                            {
                                $test = new UserModel();
                                $test->insertUser($aUser);
                            }
                            catch(PDOException $e)
                            {
                                die('Error : ' . $e->getMessage());
                            }
                            echo "Inscription réussit !";
                            echo $aUser->getNameUser();
                            //header('location:Index');
                        }
                        else{
                            echo "Votre adresse mail n'est pas valide !";
                        }   
                    }
                    else{
                        echo "Les adresses emails ne correspondent pas !";
                    }
                }
                else{
                    echo "Vos mots de passes ne correspondent pas !";
                }      
            }
            else{
                    echo "Votre pseudo ne doit pas dépasser 255 caractères !";
                }
            
   
        }
    }
}




?>
