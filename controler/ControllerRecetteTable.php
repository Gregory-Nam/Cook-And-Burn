<?php
require_once('view/View.php');
include('./model/User.php');
include ('./model/UserModel.php');
require_once ('./model/reCaptcha/autoload.php');

class ControllerRecetteTable
{
    private $_userModel;
    private $_view;
    public function __construct()
    {
        if(isset($url))
            throw new Exception('Page introuvable');
        else
            $this->recetteTable();
    }

    public function recetteTable()
    {

        $this->_userModel = new UserModel();
        $this->_view = new View('recetteTable');
        $this->_view->generate(array($this->_userModel));

    }
}