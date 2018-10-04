<?php

class TopRecetteModel extends Model
{
	public funcion getRecettes()
	{
		$this ->getBdd();
		return $this->getAll('recettes', 'Recette');
	}
}
