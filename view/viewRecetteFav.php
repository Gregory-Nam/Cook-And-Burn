<?php
session_start();
include("viewProfil.php");
?>

<div class="special">
    <div class="container">
        <div class="special-heading">
            <h3>Voici vos recettes favorites !</h3>
        </div>
<?php
if(isset($_SESSION['pseudo']))
{

    foreach($favRec as $favRe) :
    //echo $favRe->getNomRecette();
    ?>

        <div class="w3ls-menu-grids">
            <div class="menu-top-grids agileinfo">
                <div class="col-md-3 menu-grid">
                    <div class="agile-menu-grid">
                        <a href="ContenuRecette?id=<?php echo (urlencode($favRe->getNomRecette()));?>" />
                        <img src="./files/<?php echo $favRe->getImageRec();?>" alt="" />
                        <div class="agileits-caption">
                            <h4><?php echo $favRe->getNomRecette();?> </h4>
<!--                        <p> par --><?php //echo $favRec->getAuteur();?><!--</p>-->
                        </div>
                        </a>
                 </div>
                </div>
                <div class="clearfix"> </div>
            </div>

        </div>
<?php
    endforeach;
}
?>
    </div>
</div>

