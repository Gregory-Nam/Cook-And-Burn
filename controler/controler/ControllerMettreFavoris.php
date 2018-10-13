<?php
require_once('view/View.php');
include('./model/User.php');
include ('./model/UserModel.php');
require_once ('./model/reCaptcha/autoload.php');

class ControllerMettreFavoris
{
    private $_favorisModel;
    private $_view;
    public function __construct()
    {
        if(isset($url))
            throw new Exception('Page introuvable');
        else
            $this->MettreFavoris();
    }

    public function MettreFavoris()
    {
//        $this->_recetteModel = new TopRecetteModel();
//        $recette = $this->_recetteModel->getRecettes();
//
//        $this->_view = new View('Index');
//        $this->_view->generate(array('recette' => $recette));

//
//        $this->_favorisModel = new FavorisModel();
//        $favRec = $this->_favorisModel->getFavorisForUser();
//
//        $this->_view = new View('Rec');
//        $this->_view->generate(array('favRec' => $favRec));

    }
}