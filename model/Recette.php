<?php
class Recette
{
	private $_id;
	private $_title;
	private $_description;
	private $_auteur;
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

	public function setTitle($name)
	{
		if(is_string($name))
			$this->_title = $name;
	}

	public function setDescription($name)
	{
		if(is_string($name))
			$this->_title = $name;

	}

	public function setAuteur($name)
	{
		if(is_string($name))
			$this->_title = $name;

	}

	//GETTER
	public function getId()
	{
		return $this->_id;
	}

	public function getTitle()
	{
		return $this->_title;
	}

	public function getDescription()
	{
		return $this->_description;
	}

	public function getTitle()
	{
		return $this->_title;
	}
}
