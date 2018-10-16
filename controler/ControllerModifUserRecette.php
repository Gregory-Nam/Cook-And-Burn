<?php
require_once('view/View.php');
include('./model/User.php');
include ('./model/UserModel.php');
require_once ('./model/reCaptcha/autoload.php');

class ControllerModifUserRecette
{
    private $_userModel;
    private $_recetteModel;
    private $_view;
    public function __construct()
    {
        if(isset($url))
            throw new Exception('Page introuvable');
        else
            $this->modifTable();
    }

    public function modifTable()
    {

        $this->_userModel = new UserModel();
        $this->_recetteModel = new RecetteModel();

        $this->_view = new View('ModifRecetteTable');
        $this->_view->generate(array("uM" => $this->_userModel, "rM" => $this->_recetteModel));

    }
}


