<?php
class RecetteModel extends Model{

    public function insertRecette($_recette)
    {
        try{
            $query = 'INSERT INTO recettes (titre,description, descriptionDet,auteur,ingredients,image, nombre_personne) VALUES(?,?,?,?,?,?,?)';
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


    public function getByTitre($_titre)
    {
        $titreDecodee = str_replace('+', ' ', urldecode($_titre));
        try{
            $query = 'SELECT * FROM recettes WHERE titre ="'.$titreDecodee.'"';

            $stmt = $this->getBdd()->query($query);

            if($rec = $stmt->fetch())
            {

                $aRec = new Recette($rec['titre'], $rec['description'],$rec['descriptionDet'], $rec['auteur'], $rec['ingredient'], $rec['image'],$rec['nombre_personne']);
                $aRec->setId($rec['id']);
            }
            else{
                echo "pas de recette de ce nom";
                echo $titreDecodee;

                return null;
            }
            return $aRec;
        }
        catch(Exception $e)
        {
            echo $e;
        }
    }

    public function postCommentaire($commentaire,$auteur,$recette)
    {
        try{
            print_r($commentaire);
            print_r($auteur);
            print_r($recette);
            $query = 'INSERT INTO commentaire (commentaire,auteur, id_recette) VALUES(?,?,?)';
            $stmt = $this->getBdd()->prepare($query);
            $ret =$stmt->execute(array($commentaire,$auteur,$recette));
            
        }
        catch (Exception $e)
        {
            echo $e;
        }
        return true;
    }

    public function getCommentaire($titre)
    {
        try{
            $query = 'SELECT * FROM commentaire WHERE id_recette = "'.$titre.'"';
            $stmt = $this->getBdd()->query($query);
            //$ret =$stmt->execute(array($titre));
            
            while($c = $stmt->fetch()){
                echo $c['auteur'].' : '.$c['commentaire'] .'<br/>';
                
            }

                
        }
        catch(Exception $e){
            echo $e;
        }
        return $var;
    }


}

