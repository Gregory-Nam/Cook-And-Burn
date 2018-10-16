<?php
require_once('view/View.php');
include('./model/User.php');
include ('./model/UserModel.php');
require_once ('./model/reCaptcha/autoload.php');
session_start();

class ControllerModifierRec
{
    private $_recetteModel;
    private $_userModel;
    private $_view;
    public function __construct()
    {
        if(isset($url))
            throw new Exception('Page introuvable');
        else
            $this->ModifRec();
    }

    public function ModifRec()
    {

<<<<<<< HEAD

=======
        
>>>>>>> 9ef997bd488d871ae5f16f72e2abfd1d6678e0b1
        $this->_view = new View('ModifierRec');
        $this->_view->generate(array());

    }
}