<?php
    session_start();
?>
<html><head>
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
</head><body>
<? include ("header.php"); ?>
<div class="container">
<br/>
<h1>Etat de l'authentification : </h1>
<br/>
<?php
if (($_SESSION['nomutilisateur']) == "Alexandre Gosselin" && ($_SESSION['motdepasse']) == "1234")
{
    include ("secret.php");
}
else
{
    echo "Authentification non effectuee. ";
}
?>
</div> <!-- /container -->
<? include ("footage.php"); ?>
</body></html>


