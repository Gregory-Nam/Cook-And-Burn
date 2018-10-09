<?php
class Recette
{
	// TOUS LES CHAMPS DE LA TABLE
	private $_id;
	private $_titre;
	private $_description;
	private $_auteur;
	private $_ingredient;
	private $_image;
	private $_nombrePersonne;

	//CONSTRUCTEUR
	public function __construct(array $data)
	{
		$this->hydrate($data);
	}

	//HYDRATION CE QUI CORRESPOND A APPORTER AU OBJET CE QU'ILS ONT BESOIN
	//POUR EXISTER
	public function hydrate(array $data)
	{
		foreach($data as $key => $value)
		{
			$method = 'set'.ucfirst($key);

			if(method_exists($this, $method))
				$this->$method($value);
		}
	}


	// SETTER
    public function setId($number)
    {

        if(is_numeric($number))
        {
            $this->_id = $number;
        }
    }

	public function setTitre($name)
	{
		if(is_string($name))
			$this->_titre = $name;
	}

	public function setDescription($name)
	{
		if(is_string($name))
			$this->_description = $name;

	}

	public function setAuteur($name)
	{
		if(is_string($name))
			$this->_auteur = $name;

	}

	public function setIngredient($name)
	{
		if(is_string($name))
			$this->_ingredient = $name;

	}

	public function setImage($name)
	{
		if(is_file($name))
			$this->_image = $name;

	}

	public function setNombrePersonne($number)
    {

        if(is_numeric($number))
        {
            $this->_nombrePersonne = $number;
        }
    }

	//GETTER
	public function getId()
	{
		return $this->_id;
	}
	public function getNombrePersonne()
	{
		return $this->_nombrePersonne;
	}

	public function getTitre()
	{
		return $this->_titre;
	}

	public function getImage()
	{
		return $this->_image;
	}

	public function getIngredient()
	{
		return $this->_ingredient;
	}

	public function getDescription()
	{
		return $this->_description;
	}

	public function getAuteur()
	{
		return $this->_auteur;
	}
}
