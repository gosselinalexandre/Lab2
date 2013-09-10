<?php
/**
 * User: administrateur
 * Date: 13-09-06
 * Time: 13:00
 */

$userfile= file_get_contents("Pays.txt");
$pays = explode("\n",$userfile);
sort($pays);
foreach ($pays as $text)
{
    echo $text . "<br/>";
}

if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE)
{
    echo "<script type=\"text/javascript\"> alert('Vous utilisez IE? Pensez Open Source = Mozilla Firefox!');</script><br/>";
}

echo '<img src="tux_eats_android-580x456.jpg">';