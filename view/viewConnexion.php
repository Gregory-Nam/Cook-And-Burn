<?php
session_start();
    $this->_t = "Connexion";
    ?>

</div>
</div>
</div>
</div>
    <div class="contact-form">
                <h3>Connexion</h3>
        <center><form action="ConnexionAction" method="post">
            <p>
                <input type="text" name="name" placeholder ="Nom utilisateur" id="name"/>
            </p>

            <p>
                <input type="password" name="password" placeholder="Mot de passe" id="firstname"/>
            </p>
            <?php if(isset($_SESSION['erreur'])){
                echo '<p><span class="label label-danger">'.$_SESSION['erreur'].'</span>';
                unset($_SESSION['erreur']);
            } ?>

            <p>
                <input type="submit" name="action" value="Me connecter"/>
            </p>
</form></center></div>
