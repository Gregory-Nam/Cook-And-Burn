<?php
// CLASSE ABSTRAITE
// METHODE QUE L'ON UTILISERA SOUVENT
// ETEND D'AUTRE CLASSE
abstract class Model
{
	private static $_bdd;
	private $servername = "mysql-cookandburn-gxaj.alwaysdata.net";
	private $username = "167602";
	private $password = "**********";
	private $dbname = "**************";
	//INSTANCIATION DE LA CONNEXION A LA BDD
	private static function setBdd()
	{
		self::$_bdd = new PDO('mysql:host=$servername;dbname=$dbname;charset=utf8',$username, $password);
		//self::$_bdd->setAtribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	}

	//RECUPERATION DE LA CONNEXION A LA BDD;
	protected function getBdd()
	{
		if(self::$_bdd == null)
			self::setBdd();
		return self::$_bdd;
	}


}
