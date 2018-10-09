<?php
class RecetteModel extends Model{

	public function insertRecette($_recette)
    {
    	try{
            $query = 'INSERT INTO recettes (titre,description, descriptionDet,auteur,ingredients,image, nombre_personne) VALUES(?,?,?,?,?,?)';

            $stmt = $this->getBdd()->prepare($query);
            $stmt->bindValue(1, $_recette->getTitre(), PDO::PARAM_STR);
            $stmt->bindValue(2, $_recette->getDescription(), PDO::PARAM_STR);
            $stmt->bindValue(3, $_recette->getDescriptionDet(), PDO::PARAM_STR);
            $stmt->bindValue(4, $_recette->getAuteur(), PDO::PARAM_STR);
            $stmt->bindValue(5, $_recette->getIngredient(), PDO::PARAM_STR);
            $stmt->bindValue(6, $_recette->getImage(), PDO::PARAM_STR);
            $stmt->bindValue(7, $_recette->getNombrePersonne(), PDO::PARAM_STR);

            $ret =$stmt->execute();

        }

        catch (Exception $e)
        {
            echo $e;
        }
        return true;
    }

}
