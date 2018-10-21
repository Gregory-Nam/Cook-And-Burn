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


            <textarea class="form-control" name="descriptionRecette"><?php echo $recToUpdate->getDescription()?></textarea>
            <textarea class="form-control" name="descriptionRecette2"><?php echo $recToUpdate->getDescriptionDet()?></textarea>
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


            <?php
                $i=1;
                foreach(preg_split("/((\r?\n)|(\r\n?))/", $recToUpdate->getEtapesNl()) as $line){
            ?>

                <p>Etape <?php echo $i;?> : </p>
                <textarea name="etape <?php echo $i++;?>"><?php echo trim($line); ?></textarea>
                </br>

            <?php
            }
            ?>

            <select name="etapes[]" onchange='affiche2();' id="lesEtapes" multiple>
                <?php
                for($i; $i <= 30; ++$i)
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
                        nonSelectedText: 'Selectionner les étapes que vous voulez rajouter',
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
                            //trim permet d'enlever les espaces au debut et a la fin
                            document.body.appendChild(newTextArea);
                            span.innerHTML += selectBox[i].innerHTML.trim() +
                                '<textarea name="'+selectBox[i].innerHTML.trim()+'"></textarea><br/><br/>';
                            //post incrementation pour incrementer apres avoir mis la mesure actuel

                        }
                    }
                }
            </script>
            <div id="affichageEtapes"></div>


            <p>Nombre de personne :

            </p>
            <input style="display:inline" type="number" min="0" name="nombrePersonne" value = "<?php ECHO $recToUpdate->getNombrePersonne()?>"/>
            <p>

                <input type="submit"  rows="10" cols="50" name="action" value="Créer !"/>
            </p>

        </form></center></div>

