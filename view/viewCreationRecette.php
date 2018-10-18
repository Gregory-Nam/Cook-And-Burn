<?php
    $this->_t = "Création recette";
    ?>

</div>
</div>
</div>
</div>
    <div class="contact-form">
        <h3>Ma recette : </h3>
        <center>
            <form action="RecetteAction" enctype="multipart/form-data" method="post">
                <input style="display:inline" type="file" name="imageRecette" placeholder="Description de la recette"/>
                <p>
                    <input type="text" name="nameRecette" placeholder ="Titre de la recette" />
                </p>
                <textarea class="form-control" name="descriptionRecette">Description de la recette </textarea>
                <textarea class="form-control" name="descriptionRecette2">Description de la recette plus longue</textarea>
<!--            <textarea class="form-control" name="ingredientRecette">ingredient </textarea>-->
                <span class="test">
                    <select id="lesIngredients" multiple>
                        <?php
                        $i = 0;
                        foreach($ingredients as $ingredient) :?>
                            <option value="<?php echo $i;?>"> <?php echo $ingredient->getNomIngredient();?> </option>
                        <?php ++$i;
                        endforeach; ?>

                    </select>

                </span>
                <br/>
                <script type="text/javascript">
                $(document).ready(function() {
                    $('#lesIngredients').multiselect({ enableFiltering: true,
                        includeSelectAllOption: true,
                        maxHeight:200,
                        buttonWidth:400});

                });
                </script>
                

                    <script text="tetxt/javascript">
                    function getTextUsingJavascript(){
                     var cbo = document.getElementById("lesIngredients");
                    document.getElementById('affichage').innerHTML =("Les ingrédients sont : " + cbo.options[cbo.selectedIndex].text);
                    }
                    </script>



                    <button name="bite" id="btnGetTextJavascript" onclick="getTextUsingJavascript()">Afficher</button> 


                <div id="affichage">yo</div> 
                

                <br/>
                <p>Nombre de personne :</p>
                <p>
                    <input style="display:inline" type="number" min="0" name="nombrePersonne" />
                </p>
                <p>
                    <input type="submit"  rows="10" cols="50" name="action" value="Créer !"/>
                </p>

            </form>

                

        </center>

    </div>

