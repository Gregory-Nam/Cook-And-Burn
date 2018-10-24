<?php
require_once('view/View.php');
include('./model/User.php');
include ('./model/UserModel.php');
require_once ('./model/reCaptcha/autoload.php');
session_start();
class ControllerIngredientTable
{
    private $_userModel;
    private $_view;
    private $_recetteModel;
    public function __construct()
    {
        if(isset($url))
            throw new Exception('Page introuvable');
        else
            $this->ingredientTable();
    }

    public function ingredientTable()
    {
        $this->_userModel = new UserModel();
        $this->_recetteModel = new RecetteModel();

        $this->_ingredientModel = new IngredientsModel();
        if(isset($_SESSION['pseudo']) AND $_SESSION['pseudo']=='adm'){
           $this->_view = new View('ingredientsTable'); 
        }
        else{
            header('Location:Error');
        }
        $this->_view->generate(array("uM" => $this->_userModel, "rM" => $this->_recetteModel, "in"=> $this->_ingredientModel));



    }
}