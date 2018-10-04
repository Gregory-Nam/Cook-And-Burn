<?php
class Recette
{
	private $_id;
	private $_titre;
	//ET TOUTES LES VALEURS QUE L'ON RECUPERER DANS LA TABLE
	
	//CONSTRUCTEUR
	public function __construct(array $data)
	{
		$this->hydrate($data);
	}
	
	public function hydrate(array $data)
	{
		foreach($data as $key => $value)
		{
			$method = 'set'.ucfirst($key);
			
			if(method_exists($this, $method))
				$this->$method($value);
		}
	}
	
	//SETTERS
		//A IMPLEMENTER SELON LES DONNES MEMBRE
		
	//GETTER
		//A IMPLEMENTER SELON LES DONNES MEMBRE
}