<?php
	session_start();
    $this->_t = "Profil";

    if(isset($_POST['deco'])){
    	session_destroy();
    	header("Location: connexion");
    }
    ?>

</div>
</div>
</div>
</div>

<?php 
	echo '<center><h1>'. 'Profil de : ' .$_SESSION['pseudo'] . '</h1></center>';
?>
<div class="contact-form">
	<form action="" method="post">
	<center><input type="submit" name="deco" value="Me Déconnecter"></center>
	</form>
</div>
