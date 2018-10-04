<?php
class Rooter
{
	private $_ctrl;
	private $_view;

	public function routeReq()
	{
		try
		{
			//CHARGEMENT AUTOMATIQUE DES CLASSES
			spl_autoload_register(function($class){
				require_once('model/'.$class'.php');
			});
			$url='';

			//LE CONTROLER EST INCLUS SELON L'ACTION DE L'UTILISATEUR
			if(isset($_GET['url']))
			{
				$url = explode('/', filter_var($_GET['url'],
				FILTER_SANITIZE_URL));

				$controller = ucfirst(strtolower($url[0]));
				$controlerClass = "Controler".$controller;
				$controllerFile = "controller/".controlerClass.".php";

				if(file_exists($controlerFile))
				{
					require_once($controlerFile);
					$this->_ctrl = new $controllerClass($url);
				}
				else
					throw new Exception('Page introuvable');
			}
			else
			{
				require_once('controller/ControllerIndex.php');
				$this->_ctrl = new ControllerIndex($url);
			}
		}
		//GESTION DES EXCEPTIONS
		catch(Exception $e)
		{
			$errorMsg = $e->getMessage();
			require_once('view/viewError.php');
		}
	}
}
