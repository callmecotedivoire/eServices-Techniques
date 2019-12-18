<?php
if (@$_REQUEST[link]=="login"){include('connexion.php');}

elseif (@$_REQUEST[link]=="creer_compte"){include('pages/creation_compte.php');}

else{include('pages/accueil.php');}
?>
