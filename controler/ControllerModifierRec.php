<?php
require_once('view/View.php');
include('./model/User.php');
include ('./model/UserModel.php');
require_once ('./model/reCaptcha/autoload.php');
session_start();

class ControllerModifierRec
{
    private $_recetteModel;
    private $_ingredientsModel;
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

        $this->_recetteModel = new RecetteModel();
        $this->_ingredientsModel = new IngredientsModel();

        $recToUpdate = $this->_recetteModel->getByTitre($_SESSION['recette']);
        $ingredients = $this->_ingredientsModel->getAll();
        $this->_view = new View('ModifierRec');
        $this->_view->generate(array("recToUpdate" => $recToUpdate,"ingredients" => $ingredients));

    }
}