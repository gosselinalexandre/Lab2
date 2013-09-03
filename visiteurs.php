<?php
/**
 * Created by JetBrains PhpStorm.
 * User: administrateur
 * Date: 13-09-03
 * Time: 10:52
 * To change this template use File | Settings | File Templates.
 */

$userfile= file_get_contents("Pays.txt");
$pays = explode("\n",$userfile);
sort($pays);
foreach ($pays as $text)
{
	echo $text . "<br/>";
}