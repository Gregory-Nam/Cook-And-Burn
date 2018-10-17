<?php
    $this->_t = "Création recette";
    ?>

</div>
</div>
</div>
</div>
    <div class="contact-form">
                <h3>Ma recette : </h3>

        <center><form action="RecetteAction" enctype="multipart/form-data" method="post">
            <input style="display:inline" type="file" name="imageRecette" placeholder="Description de la recette"/>

            <p>
                <input type="text" name="nameRecette" placeholder ="Titre de la recette" />
            </p>

            <textarea class="form-control" name="descriptionRecette">Description de la recette </textarea>
            <textarea class="form-control" name="descriptionRecette2">Description de la recette plus longue</textarea>
<!--            <textarea class="form-control" name="ingredientRecette">ingredient </textarea>-->
            <form size="2">
            <?php
                foreach($ingredients as $ingredient) :

            ?>
                <input type = "checkbox" value="<?php echo $ingredient->getNomIngredient();?>"><?php echo $ingredient->getNomIngredient();?> </br>
            <?php
                endforeach;
            ?>
            </form>




            <p>Nombre de personne :

            </p>
                <input style="display:inline" type="number" min="0" name="nombrePersonne" />
            <p>

                <input type="submit"  rows="10" cols="50" name="action" value="Créer !"/>
            </p>

</form></center></div>

