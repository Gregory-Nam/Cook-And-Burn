<?php
session_start();
class ControllerSupprimerRecAction
{

    private $_rModel;
    private $_bModel;
    private $_uModel;

    function __construct()
    {
        $this->_rModel = new RecetteModel();
        $this->_bModel = new BurnModel();
        $this->_uModel = new UserModel();
        $this->suppRec();

    }

    function suppRec()
    {
        $rec = $this->_rModel->getByTitre($_SESSION['recette']);
        $this->_rModel->deleteRecette($rec);
        unlink("./files/".$rec->getImage());
        header("location:index");

    }
}
