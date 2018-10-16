<?php
    $rM = new RecetteModel();
    $recToUpdate = $rM->getByTitre($_SESSION['recette']);
?>

</div>
</div>
</div>
</div>
<div class="contact-form">
    <h3>Ma recette : </h3>

<<<<<<< HEAD
    <center><form action="ModifierRecAction" enctype="multipart/form-data" method="post">
=======
    <center><form action="RecetteAction" enctype="multipart/form-data" method="post">
>>>>>>> 9ef997bd488d871ae5f16f72e2abfd1d6678e0b1

            <img src="./files/<?php echo $recToUpdate->getImage();?>" width = "250em" height="250em">

            <input style="padding-left:10em;display:inline" type="file" name="imageRecette" placeholder="Description de la recette"/>


            <p>
<<<<<<< HEAD
                <input type="text" name="nameRecette" value ="<?php echo $recToUpdate->getTitre()?>" />
            </p>


            <textarea class="form-control" name="descriptionRecette"> <?php echo $recToUpdate->getDescription()?></textarea>
=======
                <input type="text" name="nameRecette" placeholder ="<?php echo $recToUpdate->getTitre()?>" />
            </p>


            <textarea class="form-control" name="descriptionRecette"><?php echo $recToUpdate->getDescription()?> </textarea>
>>>>>>> 9ef997bd488d871ae5f16f72e2abfd1d6678e0b1
            <textarea class="form-control" name="descriptionRecette2"><?php echo $recToUpdate->getDescriptionDet()?></textarea>
            <textarea class="form-control" name="ingredientRecette"><?php echo $recToUpdate->getIngredient()?> </textarea>



            <p>Nombre de personne :

            </p>
            <input style="display:inline" type="number" min="0" name="nombrePersonne" value = "<?php ECHO $recToUpdate->getNombrePersonne()?>"/>
            <p>

                <input type="submit"  rows="10" cols="50" name="action" value="Créer !"/>
            </p>

        </form></center></div>

