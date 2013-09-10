<?php
    session_start();
    $nomutilisateursession=$_REQUEST["nomutilisateur"];
    $motdepassesession=$_REQUEST["motdepasse"];
    $_SESSION['nomutilisateur']="$nomutilisateursession";
    $_SESSION['motdepasse']="$motdepassesession";
?>
<html><head>
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
</head><body>
<? include ("header.php"); ?>
<div class="container">
<br/>
<h1>Creation de votre session</h1>
<br/>
<a href="session2.php">Cliquez ici pour continuer</a>
</div> <!-- /container -->
<? include ("footage.php"); ?>
</body></html>


