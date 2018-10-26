<?php
require_once('view/View.php');
include('./model/User.php');
include ('./model/UserModel.php');
class ControllerIndex
{
	private $_recetteModel;
	private $_view;

	public function __construct($url)
	{
	//1 car un seul parametre dans l'URL, dans l'accueil, seulement pour charger le controller
		if(empty($url) && ($url && count($url) > 1))
			throw new Exception('Page introuvable');
		else
			$this->recette();
	}

	public function recette()
	{
		$this->_recetteModel = new RecetteModel();
		$recettes = $this->_recetteModel->getAllRecette();
		$bestRec = $this->_recetteModel->getBestRec();
		$recForInvit = $this->_recetteModel->getRecetteForInvit();



		$this->_view = new View('Index');
		$this->_view->generate(array('recette' => $recettes, "bestRec" => $bestRec, "recForInvit" => $recForInvit));
	}
}
