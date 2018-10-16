<?php
require_once('view/View.php');
include('./model/User.php');
include ('./model/UserModel.php');
require_once ('./model/reCaptcha/autoload.php');
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
        $this->_burnModel = new BurnModel();
        $this->_recetteModel = new RecetteModel();
        $this->_favorisModel = new FavorisModel();

        $this->_view = new View('ContenuRecette');
        $this->_view->generate(array("uM"=>$this->_userModel, "bM" => $this->_burnModel, "rM" => $this->_recetteModel
                                     , "fM" => $this->_favorisModel));

    }
}