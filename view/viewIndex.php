<?php
$this->_t = 'Cook And Burn';
?>
    <div class="banner-info">
        <h2>Bienvenu sur Cook And Burn !</h2>
        <p>BLABLABLA</p>
    </div>
    <div class="banner-grads">
        <div class="col-md-4 banner-grad">
            <div class="banner-grad-img">
                <img src="images/b1.jpg" alt="" />
                <h4>Suspendisse</h4>
            </div>
        </div>
        <div class="col-md-4 banner-grad">
            <div class="banner-grad-img">
                <img src="images/b2.jpg" alt="" />
                <h4>Molestie</h4>
            </div>
        </div>
        <div class="col-md-4 banner-grad">
            <div class="banner-grad-img">
                <img src="images/b3.jpg" alt="" />
                <h4>Imperdiet</h4>
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
                <h3>Today Specials</h3>
            </div>
<?php
foreach($recette as $rec) :?>

            <div class="special-grids">
                <div class="col-md-4 w3l-special-grid">
                    <div class="col-md-6 w3ls-special-img">
                        <div class="w3ls-special-text effect-1">
                            <h4><?php echo $rec->getTitre();?></h4>
                        </div>
                    </div>
                    <div class="col-md-6 agileits-special-info">
                        <h4><?php echo $rec->getTitre();?></h4>
                        <p><?php echo $rec->getDescription();?></p>
                    </div>
                    <div class="clearfix"> </div>
                </div>

                <div class="clearfix"> </div>
            </div>


<?php endforeach; ?>
        </div>
    </div>




