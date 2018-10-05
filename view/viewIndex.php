<?php
$this->_t = 'Cook And Burn';
foreach($recette as $rec) :?>

    <div class="col-md-3 menu-grid">
        <div class="agile-menu-grid">
            <a href="single.html">
                <img src="images/<?php echo $rec->getTitre()?>.jpg" alt="" />
                <div class="agileits-caption">
                    <h4> <?php echo $rec->getTitre(); ?> </h4>
                    <p>$21</p>
                </div>
            </a>
        </div>
    </div>

<?php endforeach; ?>




