<?php
require_once('view/View.php');
include('./model/User.php');
include ('./model/UserModel.php');
require_once ('./model/reCaptcha/autoload.php');
session_start();
class ControllerContenuRecette{
    private $_userModel;
    private $_burnModel;
    private $_recetteModel;
    private $_favorisModel;
    private $_view;
    public function __construct()
    {
        if(isset($url))
            throw new Exception('Page introuvable');
        else
            $this->ContenuRecette();
    }

    public function ContenuRecette()
    {

        $this->_userModel = new UserModel();
        $user = $this->_userModel->getByNom($_SESSION['pseudo']);

        $this->_burnModel = new BurnModel();
        $this->_recetteModel = new RecetteModel();
        $marec = $this->_recetteModel ->getByTitre($_SESSION['recette']);
        $mescom = $this->_recetteModel->getCommentaire($_SESSION['recette']);

        $this->_favorisModel = new FavorisModel();

        $this->_view = new View('ContenuRecette');
        $this->_view->generate(array("user"=>$user, "bM" => $this->_burnModel, "marec" => $marec
                                     , "fM" => $this->_favorisModel, "mescom" => $mescom));

    }
}