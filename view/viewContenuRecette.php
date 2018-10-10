<?php
session_start();
$_SESSION['recette'] = substr(strrchr($_SERVER['REQUEST_URI'], '='), 1);
$titre = substr(strrchr($_SERVER['REQUEST_URI'], '='), 1);
$this->_t = $titre;?>
    </div>
    </div>
    </div>
    </div>

<div class = "container">
    <?php
    $uM = new RecetteModel();
    $marec = $uM->getByTitre($titre);
    ;?>
    <center>
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
        <form method="post" action="CommentaireRecette">
            <input type="textarea" name="commentaireRecette" placeholder="Recette vraiment excellente ! ">
            <input type="submit" name="action" value="Poster"/>
        </form>
        </div>
        <div class="customer-info">
            <p><?php echo $um->getCommentaire($titre); ?></p>
        </div>
        <div class="contact-form">
        <form method="post" action="MettreFavoris">
            <input type="submit" name="action" value="Poster"/>
        </form>
        </div>


    </center>

</div>

