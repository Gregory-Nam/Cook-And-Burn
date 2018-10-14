<?php
class RecetteModel extends Model{

    public function insertRecette($_recette)
    {
        try{
            $query = 'INSERT INTO recettes (titre,description, descriptionDet,auteur,ingredients,image, nombre_personne,burns) VALUES(?,?,?,?,?,?,?,?)';
            $stmt = $this->getBdd()->prepare($query);
            $stmt->bindValue(1, $_recette->getTitre(), PDO::PARAM_STR);
            $stmt->bindValue(2, $_recette->getDescription(), PDO::PARAM_STR);
            $stmt->bindValue(3, $_recette->getDescriptionDet(), PDO::PARAM_STR);
            $stmt->bindValue(4, $_recette->getAuteur(), PDO::PARAM_STR);
            $stmt->bindValue(5, $_recette->getIngredient(), PDO::PARAM_STR);
            $stmt->bindValue(6, $_recette->getImage(), PDO::PARAM_STR);
            $stmt->bindValue(7, $_recette->getNombrePersonne(), PDO::PARAM_STR);
            $stmt->bindValue(8, $_recette->getNombreBurn(), PDO::PARAM_STR);

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

                $aRec = new Recette($rec['titre'], $rec['description'],$rec['descriptionDet'], $rec['auteur'], $rec['ingredients'], $rec['image'],$rec['nombre_personne'],$rec['burns']);
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
        $var = [];
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

    public function addOneBurn($rec)
    {
        $query = "UPDATE recettes SET burns =".$rec->getNombreBurn()." + 1 WHERE id =".$rec->getId();
        print_r($rec->getNombreBurn(),$rec->getId());
        $this->getBdd()->exec($query);
    }

    public function RemoveOneBurn($rec)
    {
        $query = "UPDATE recettes SET burns =".$rec->getNombreBurn()." - 1 WHERE id =".$rec->getId();
        $this->getBdd()->exec($query);
    }

    public function nbRecettes(){
       /* $query = 'SELECT count(*) FROM recettes';
        $sth = $this->getBdd()->exec($query);
        print_r($sth->fetchAll(PDO::FETCH_OBJ));*/
        return $this->getBdd()->query("SELECT COUNT(*) FROM recettes")->fetchColumn();

        
    }

    public function nbCom(){
       /* $query = 'SELECT count(*) FROM recettes';
        $sth = $this->getBdd()->exec($query);
        print_r($sth->fetchAll(PDO::FETCH_OBJ));*/
        return $this->getBdd()->query("SELECT COUNT(*) FROM commentaire")->fetchColumn();

        
    }

    public function affichageRecette(){
        $req= $this->getBdd()->query("SELECT * FROM recettes")->fetchAll();
            ?>
        <table id="myTable" class="table table-striped" >  
        <thead>  
          <tr>  
            <th>ID</th>  
            <th>Titre</th>

            <th>Description</th>
            <th>Détails</th>
            <th>Auteur</th>
            <th>Ingrédients</th>
            <th>Personne</th> 
            <th>Burns</th> 
            <th>Action</th>  
          </tr>  
        </thead>  
        <tbody> 
           <?php foreach ($req as $q): ?>
            <tr>
                    <td><?php echo $q['id'] ?></td>
                    <td><?php echo $q['titre'] ?></td>

                    <td><?php echo $q['description'] ?></td>
                    <td><?php echo $q['descriptionDet'] ?></td>
                    <td><?php echo $q['auteur'] ?></td>
                    <td><?php echo $q['ingredients'] ?></td>
                    <td><?php echo $q['nombre_personne'] ?></td>
                    <td><?php echo $q['burns'] ?></td>
                    <td><a href="">Editer</a></td>
                </tr>


        <?php endforeach; ?>
        </tbody>
                </table>
        </tbody>  
      </table>  
      </div>
      <?php  
    }


}

