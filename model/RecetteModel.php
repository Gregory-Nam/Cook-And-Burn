<?php
class RecetteModel extends Model{

	public function insertRecette($_recette)
    {
            $query = 'INSERT INTO recettes (titre,description, auteur,ingredients,image, nombre_personne) VALUES(?,?,?,?,?,?)';

            $stmt = $this->getBdd()->prepare($query);

            $_titreQ = $_recette->getTitre();
            $_descriptionQ = $_recette->getDescription();
            $_auteurQ = $_recette->getAuteur();
            $_ingredientsQ = $_recette->getIngredient();
            $_imageQ = $_recette->getImage();
            $_nombrePersonneQ = $_recette->getNombrePersonne();
            $stmt->execute(array($_titreQ, $_descriptionQ, $_auteurQ, $_ingredientsQ, $_imageQ, $_nombrePersonneQ));

        return true;
    }

}