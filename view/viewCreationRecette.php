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
            <form name="t" action="RecetteAction" enctype="multipart/form-data" method="post">
                <input style="display:inline" type="file" name="imageRecette" placeholder="Description de la recette"/>
                <p>
                    <input type="text" name="nameRecette" placeholder ="Titre de la recette" />
                </p>
                <textarea class="form-control" name="descriptionRecette">Description de la recette </textarea>
                <textarea class="form-control" name="descriptionRecette2">Description de la recette plus longue</textarea>
<!--            <textarea class="form-control" name="ingredientRecette">ingredient </textarea>-->
                <div class="test">
                <select name="ingredients[]" onchange='affiche();' id="lesIngredients" multiple >
                    <?php
                    $i = 0;
                    foreach($ingredients as $ingredient) :?>
                        <option  name="<?php echo $ingredient->getNomIngredient()?>"> <?php echo $ingredient->getNomIngredient()?> </option>
                        <?php ++$i;
                    endforeach; ?>

                </select>
                <br/>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#lesIngredients').multiselect({ enableFiltering: true,
                            includeSelectAllOption: true,
                            nonSelectedText: 'Veuillez selectionner des ingredients',
                            filterPlaceholder:'Recherche',
                            maxHeight:200,
                            buttonWidth:400});

                    });

                    function affiche() {
                        var selectBox =document.getElementById("lesIngredients"),i, span = document.getElementById('affichage');
                        span.innerHTML=''
                        var j=0
                        for (i=0; i < selectBox.length; i++)
                        {
                            if (selectBox[i].selected)
                            {
                                var newInput = document.createElement('input');
                                newInput.setAttribute('type', 'number');
                                newInput.setAttribute('placeholder', 'quel quantite');
                                //trim permet d'enlever les espaces au debut et a la fin
                                document.body.appendChild(newInput);
                                span.innerHTML += selectBox[i].innerHTML.trim() +
                                '<input type="number" min="0" name="'+selectBox[i].innerHTML.trim()+'"/>' +
                                //post incrementation pour incrementer apres avoir mis la mesure actuel
                                '<select name="mesure'+ j++ +'">' +
                                '<option value ="gramme"> gramme </option>'+
                                '<option value ="litre"> litre </option>'+
                                '<option value ="ml"> millilitre </option>'+
                                '<option value ="cc"> cuillère à café </option>'+
                                '<option value ="c"> cuillère </option>'+
                                '<option value ="cs"> cuillère à soupe </option>'+
                                '</select> <br><br>'


                            ;


                                ;
                            }
                        }
                    }
                </script>
                <div id="affichage"> </div>
                <br/><br/>
                </div>

                <select name="etapes[]" onchange='affiche2();' id="lesEtapes" multiple>
                    <?php
                        for($i = 1; $i <= 30; ++$i)
                        {
                    ?>
                    <option value="etape <?php echo $i;?>"> etape <?php echo $i;?></option>
                    <?php
                        }
                    ?>

                </select>

                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#lesEtapes').multiselect({ enableFiltering: false,
                            includeSelectAllOption: true,
                            nonSelectedText: 'Selectionnez les étapes que vous souhaitez écrire',
                            maxHeight:200,
                            buttonWidth:400});

                    });

                    function affiche2() {
                        var selectBox =document.getElementById("lesEtapes"),i, span = document.getElementById('affichageEtapes');
                        span.innerHTML=''
                        var j=0
                        for (i=0; i < selectBox.length; i++)
                        {
                            if (selectBox[i].selected)
                            {
                                var newTextArea = document.createElement('textarea');
                                newTextArea.setAttribute('type', 'text');
                                newTextArea.setAttribute('placeholder', 'quel quantite');
                                //trim permet d'enlever les espaces au debut et a la fin
                                document.body.appendChild(newTextArea);
                                span.innerHTML += selectBox[i].innerHTML.trim() +
                                    '<textarea name="'+selectBox[i].innerHTML.trim()+'"> </textarea> <br/> <br/>';
                                    //post incrementation pour incrementer apres avoir mis la mesure actuel

                            }
                        }
                    }
                </script>
                <div id="affichageEtapes"></div>



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

