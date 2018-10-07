<?php
    $this->_t = "Inscription";
    ?>
<!-- permet de fermer la banner -->
<head>
    <title>reCAPTCHA demo: Simple page</title>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
</div>
</div>
</div>
</div>
    <div class="contact-form">
                <h3>Inscription</h3>
        <center><form action="SignUpAction" method="post">
            <p>
                <input type="text" name="name" placeholder ="Nom utilisateur" id="name"/>
            </p>

            <p>
                <input type="text" name="password" placeholder="Mot de passe" id="firstname"/>
            </p>

            <p>
                <input type="text" name="password2" placeholder="Mot de passe à nouveau " id="firstname"/>
            </p>

            <p>
                <input type="text" name="mail" placeholder="Adresse mail" id="password"/>
            </p>
            <p>
                <input type="text" name="mail2" placeholder="Adresse mail confirmation" id="password"/>
            </p>

                <div class="g-recaptcha" data-sitekey="6Lcy3XMUAAAAAMSAq1uH6-gZe-XlPU-4Zmr8lEfH"></div>

            <p>
                <input type="submit" name="action" value="S'inscrire"/>
            </p>

            <br/>


        </form></center>
    </div>
