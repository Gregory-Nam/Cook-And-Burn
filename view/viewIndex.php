
<?php
$this->_t = 'Cook And Burn';
?>
    <div class="banner-info">
        <h2>Bienvenue sur Cook And Burn !</h2>
        <p> Suite à l'achat de votre barbecue votre compte sera automatiquement créée, c'est fou n'est-ce pas ? <br/>
         Cook and Burn sera votre meilleur ami pour profiter pleinement de votre nouvelle acquisition !<br/>
        Comment ça marche ? Cela est très simple, vous et tous les autres possesseurs du barbecue, pourrez partager <br/>
            vos meilleures recettes, y laisser des commentaires mais aussi y ajouter un petit burn !<br/>
         Et qui sait ? Avec un peu de chance votre recette possèdera plus de 15 burns et sera affichée sur l'accueil !</p>
    </div>
    <div class="banner-grads">
        <div class="col-md-4 banner-grad">
            <div class="banner-grad-img">
                <img src="images/b1.jpg" alt="" />
                <h4>Délicieux</h4>
            </div>
        </div>
        <div class="col-md-4 banner-grad">
            <div class="banner-grad-img">
                <img src="images/b2.jpg" alt="" />
                <h4>Rafinée</h4>
            </div>
        </div>
        <div class="col-md-4 banner-grad">
            <div class="banner-grad-img">
                <img src="images/b3.jpg" alt="" />
                <h4>À point</h4>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    </div>
</div>
</div>

    <div class="special">
        <div class="container">
            <div class="special-heading">
                <h3>Les recettes avec le plus de burns !!!</h3>
            </div>
            <div class="w3ls-menu-grids">
                <div class="menu-top-grids agileinfo">
<?php
foreach($recette as $rec) :
            ?>



                    <div class="col-md-3 menu-grid">
                        <div class="clearfix"> </div>
                        <div class="agile-menu-grid">

                            <a href="ContenuRecette?id=<?php print_r(urlencode($rec->getTitre()));?>" />
                                <img src="./files/<?php echo $rec->getImage();?>" alt="" width ="170em" height ="270em" />
                                <div class="agileits-caption">
                                    <h4><?php echo $rec->getTitre();?> </h4>
                                    <p> par <?php echo $rec->getAuteur();?></p>
                                </div>
                            </a>

                        </div>

                    </div>


<!--                    <div class="clearfix"> </div>-->

<?php endforeach; ?>

                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>




