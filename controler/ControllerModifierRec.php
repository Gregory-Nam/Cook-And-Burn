<?php
require_once('view/View.php');
include('./model/User.php');
include ('./model/UserModel.php');
require_once ('./model/reCaptcha/autoload.php');
session_start();

class ControllerModifierRec
{
    private $_recetteModel;
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

        $this->_recetteModel = new RecetteModel();
        $recToUpdate = $this->_recetteModel->getByTitre($_SESSION['recette']);
        $this->_view = new View('ModifierRec');
        $this->_view->generate(array("recToUpdate" => $recToUpdate));

    }
}