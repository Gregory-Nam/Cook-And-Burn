<?php
require_once('view/View.php');
include('./model/Recette.php');
include ('./model/RecetteModel.php');
require_once ('./model/reCaptcha/autoload.php');

class ControllerCreationRecette
{
    private $_userModel;
    private $_ingredientsModel;
    private $_view;
    public function __construct()
    {
        if(isset($url))
            throw new Exception('Page introuvable');
        else
            $this->creationRecette();
    }

    public function creationRecette()
    {

        $this->_userModel = new UserModel();
        $this->_ingredientsModel = new IngredientsModel();
        $ingredients = $this->_ingredientsModel->getAll();
        $this->_view = new View('CreationRecette');

        $this->_view->generate(array("ingredients" => $ingredients));

    }
}

