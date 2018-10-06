<?php
    $this->_t = "Inscription";
    ?>
    <form action="SignUpAction" method="post">
        <p>
            <label for="name" style="display: inline-block; width: 120px;">
                Nom d'utilisateur :
            </label>
            <input type="text" name="name" id="name"/>
        </p>

        <p>
            <label for="password" style="display: inline-block; width: 120px;">
                Mot de passe :
            </label>
            <input type="password" name="password" id="firstname"/>
        </p>

        <p>
            <label for="password2" style="display: inline-block; width: 120px;">
                Mot de passe à nouveau :
            </label>
            <input type="password" name="password2" id="firstname"/>
        </p>

        <p>
            <label for="mail" style="display: inline-block; width: 120px;">
                Adresse mail :
            </label>
            <input type="text" name="mail" id="password"/>
        </p>
        <p>
            <label for="mail2" style="display: inline-block; width: 120px;">
                Adresse mail confirmation :
            </label>
            <input type="text" name="mail2" id="password"/>
        </p>


        <p>
            <input type="submit" name="action" value="S'inscrire"/>
        </p>

        <br/>


    </form>
