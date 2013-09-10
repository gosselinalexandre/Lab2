<html><head>
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
</head><body>
<? include ("header.php"); ?>
<div class="container">
<br/>
<h1>Informations lues depuis le cookie : </h1>
<?php
if ($_COOKIE["nom"] && $_COOKIE["sexe"])
{
    echo $_COOKIE['nom'];
    echo ",";
    echo $_COOKIE['sexe'];
}
else echo "Cookie non present!";
?>
<br/>
<a href="visiteursMAJ.php">Retourner voir Tux qui machouille un Android :-p</a>
<br/>
</div> <!-- /container -->
<? include ("footage.php"); ?>
</body></html>


