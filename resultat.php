<?php
    $nomcookie=$_REQUEST["nom"];
    $sexecookie=$_REQUEST["sexe"];
    setcookie("nom",$nomcookie,time()+(40));
    setcookie("sexe",$sexecookie,time()+(40));
?>
<html><head>
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
</head><body>
<? include ("header.php"); ?>
<div class="container">
<br/>
<h1>Informations inscrites dans le cookie : </h1>
<?php
    print ("$nomcookie,$sexecookie");
?>
<br/>
<a href="resultat2.php">Lire le cookie</a>
<br/>
</div> <!-- /container -->
<? include ("footage.php"); ?>
</body></html>