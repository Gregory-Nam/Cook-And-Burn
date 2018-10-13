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
    $rM = new RecetteModel();
    $uM = new UserModel();
    $bM = new BurnModel();

    $marec = $rM->getByTitre($titre);
    $user = $uM->getByNom($_SESSION['pseudo']);

    ;?>
    <center>
        <div class="contact-form">
            <span>
            <form style="display :inline" method="post" action="MettreFavorisAction">
                <input type="submit" name="actionFav" value="Mettre en favoris"/>
            </form>
                <?php
                    if(!$bM->verifAlreadyBurn($user,$marec))
                    {

                ?>
            <form style="display :inline" method="post" action="BurnAction">
                <input type="submit" action="BurnAction" value="Ajouter un burn"/>
            </form>
                <?php
                    }
                    else
                    {
                ?>
            <form style="display :inline" method="post" action="BurnAction">
                <input type="submit" action="BurnAction" value="Enlever un burn"/>
            </form>
                <?php
                    }
                ?>
            </span>
            <?php echo $marec->getNombreBurn();?>

        </div>
        <h1> <?php echo $marec->getTitre();?> </h1> </br>
        <img src='./files/<?php echo $marec->getImage();?>' height ="10%" width="10%"/><br/>
        <h2> Description </h2>
        <p> <?php echo $marec->getDescription();?></p> <br/>
        <h2> Description détaillée </h2>
        <p> <?php echo $marec->getDescriptionDet();?></p> <br/>
        <h2> Ingredients pour <?php echo $marec->getNombrePersonne();?> personnes </h2>
        <p> <?php echo $marec->getIngredient();?></p> <br/><br/><br/>
        <h1>Commentaires :</h1>
        <div class="contact-form">
            <div class="customer-info">
                <p><?php echo $rM->getCommentaire($titre);?></p>
            </div>
        <form method="post" action="CommentaireRecette">
            <textarea class="form-control" name="commentaireRecette">Ecrivez un commentaire</textarea>
            <input class="btn" type="submit" name="action" value="Poster"/>
        </form>
        </div>




    </center>

</div>

