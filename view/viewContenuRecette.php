<?php
session_start();
$_SESSION['recette'] = substr(strrchr($_SERVER['REQUEST_URI'], '='), 1);
$titre = substr(strrchr($_SERVER['REQUEST_URI'], '='), 1);
$this->_t = $titre;




?>
    </div>
    </div>
    </div>
    </div>

<div class = "container">
    <?php
//    $rM = new RecetteModel();
//    $uM = new UserModel();
//    $bM = new BurnModel();
//    $fM = new FavorisModel();

//    $marec = $rM->getByTitre($titre);
    if(isset($_SESSION['pseudo']))
//        $user = $uM->getByNom($_SESSION['pseudo']);

    ;?>
    <center>
        <div class="contact-form">
            <span>

                <?php

                    if(!isset($_SESSION['pseudo']))
                    {

                ?>
            <form style="display :inline" method="post" action="MettreFavorisAction">
                <input type="submit" name="actionFav" value="Mettre en favoris"/>
            </form>
            <form style="display :inline" method="post" action="BurnAction">
                <input type="submit" action="BurnAction" value="Ajouter un burn"/>
            </form>
                <?php
                        if(isset($_SESSION['erreur']))
                        {
                            echo '<p><span class="label label-danger">'.$_SESSION['erreur'].'</span>';
                            unset($_SESSION['erreur']);
                        }
                    }
                    else
                    {
                        if(!$bM->verifAlreadyBurn($user,$marec))
                        {

                ?>
            <form style="display :inline" method="post" action="BurnAction">
                <input type="submit" name="BurnAction" value="Mettre un burn"/>
            </form>

                <?php
                        }
                        else {
                ?>
            <form style="display :inline" method="post" action="BurnAction">
                <input type="submit" name="BurnAction" value="Enlever un burn"/>
            </form>
                <?php
                        }

                        if(!$fM->verifAlreadyFav($user, $marec))
                        {
                ?>
            <form style="display :inline" method="post" action="MettreFavorisAction">
                <input type="submit" name="actionFav" value="Mettre en favoris"/>
            </form>
                <?php
                        }
                        else
                        {
                ?>
            <form style="display :inline" method="post" action="MettreFavorisAction">
                <input type="submit" name="actionFav" value="Enlever des favoris"/>
            </form>
            <?php
                        }
                        if($_SESSION['pseudo'] == $marec->getAuteur())
                        {
            ?>
            <form style="display :inline" method="post" action="SupprimerRecAction">
                <input type="submit" name="actionFav" value="Supprimer votre recette"/>
            </form>
            <form style="display :inline" method="post" action="ModifierRec">
                <input type="submit" name="actionFav" value="Modifier votre recette"/>
            </form>
            <?php

                        }
                    }

            ?>



            </span>
            <?php echo $marec->getNombreBurn();?>

         </div>
<!--        <h1> --><?php //echo $marec->getTitre();?><!-- </h1> </br>-->
<!--        <img src='./files/--><?php //echo $marec->getImage();?><!--' height ="10%" width="10%"/><br/>-->
<!--        <h2> Description </h2>-->
<!--        <p> --><?php //echo $marec->getDescription();?><!--</p> <br/>-->
<!--        <h2> Description détaillée </h2>-->
<!--        <p> --><?php //echo $marec->getDescriptionDet();?><!--</p> <br/>-->
<!--        <h2> Ingredients pour --><?php //echo $marec->getNombrePersonne();?><!-- personnes </h2>-->
<!--        <p> --><?php //echo $marec->getIngredient();?><!--</p> <br/><br/><br/>-->
<!--        <h1>Commentaires :</h1>-->
<!--        <div class="contact-form">-->
<!--            <div class="customer-info">-->
<!--                <p>--><?php //echo $rM->getCommentaire($titre);?><!--</p>-->
<!--            </div>-->
<!--        <form method="post" action="CommentaireRecette">-->
<!--            <textarea class="form-control" name="commentaireRecette">Ecrivez un commentaire</textarea>-->
<!--            <input class="btn" type="submit" name="action" value="Poster"/>-->
<!--        </form>-->
<!--        </div>-->


        <div clas="blog">
            <div class="container">
                <div class="col-md-8 blog-top-left-grid">
                    <div class="left-blog left-single">
                        <div class="blog-left">
                            <div class="single-left-left">
                                <h3 style="color: #fd5c63;"> <?php echo $marec->getTitre();?> - Écrit par <?php echo $marec->getAuteur();?></h3>
                                <img src='./files/<?php echo $marec->getImage();?>'/><br/>
                            </div>
                            <div class="blog-left-bottom">
                                <p>
                                    <?php echo $marec->getDescriptionDet();?>
                                    "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."
                                </p>
                            </div>
                        </div>
                    <div class="response">
                        <h3>Responses</h3>
                        <div class="media response-info">
                            <div class="media-body response-text-right">
                                <p><?php echo $mescom;?></p>

                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>

                    <div class ="opinion">
                        <h2> Ecriver un commentaire </h2>
                        <form method="post" action="CommentaireRecette">
                            <textarea class="form-control" name="commentaireRecette">Ecrivez un commentaire</textarea>
                            <input class="btn" type="submit" name="action" value="Poster"/>
                        </form>
                    </div>
                    <br/>


                </div>
                </div>

                <div class="col-md-4 blog-top-right-grid">
                    <div class="categories">
                        <h3> Description </h3>
                        <p><?php echo $marec->getDescription();?></p>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="categories">
                        <h3> Ingredients - <?php echo $marec->getNombrePersonne()?> personnes</h3>
                        <p> <?php echo $marec->getIngredient();?> </p>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="categories">
                        <h3> Les étapes</h3>
                    </div>
                </div>

            </div>
        </div>




    </center>

</div>