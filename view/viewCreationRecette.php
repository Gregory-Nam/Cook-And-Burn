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
            <p>
                <input type="text" name="nameRecette" placeholder ="Titre de la recette" />
            </p>

            <p>
                <input type="textarea" name="descriptionRecette" placeholder="Description de la recette"/>
            </p>
            <p>
                <input type="textarea" name="ingredientRecette" placeholder="Ingrédient de la recette"/>
            </p>
            <p>
                <input type="file" name="imageRecette" placeholder="Description de la recette"/>
            </p>

            <p>Nombre de personne :</p> 
                <input type="number" name="nombrePersonne" />

            <p>
                <input type="submit" rows="10" cols="50" name="action" value="Créer !"/>
            </p>

</form></center></div>
