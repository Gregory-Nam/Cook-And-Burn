<?php
//    $rM = new RecetteModel();
//    $recToUpdate = $rM->getByTitre($_SESSION['recette']);
?>

</div>
</div>
</div>
</div>
<div class="contact-form">
    <h3>Ma recette : </h3>

    <center><form action="ModifierRecAction" enctype="multipart/form-data" method="post">

            <img src="./files/<?php echo $recToUpdate->getImage();?>" width = "250em" height="250em">

            <input style="padding-left:10em;display:inline" type="file" name="imageRecette" placeholder="Description de la recette"/>


            <p>
                <input type="text" name="nameRecette" value ="<?php echo $recToUpdate->getTitre()?>" />
            </p>


            <textarea class="form-control" name="descriptionRecette"> <?php echo $recToUpdate->getDescription()?></textarea>
            <textarea class="form-control" name="descriptionRecette2"><?php echo $recToUpdate->getDescriptionDet()?></textarea>
            <textarea class="form-control" name="ingredientRecette"><?php echo $recToUpdate->getIngredient()?> </textarea>
            <?php
            $i=1;
            foreach(preg_split("/((\r?\n)|(\r\n?))/", $recToUpdate->getEtapesNl()) as $line){
            ?>

            <p>Etape <?php echo $i;?> : </p><textarea name="etape <?php echo $i++;?>"> <?php echo $line; ?> </textarea> </br>
            <?php
            }
            ?>


            <p>Nombre de personne :

            </p>
            <input style="display:inline" type="number" min="0" name="nombrePersonne" value = "<?php ECHO $recToUpdate->getNombrePersonne()?>"/>
            <p>

                <input type="submit"  rows="10" cols="50" name="action" value="Créer !"/>
            </p>

        </form></center></div>

