<?php
/**
 * Created by JetBrains PhpStorm.
 * User: administrateur
 * Date: 13-09-06
 * Time: 13:00
 * To change this template use File | Settings | File Templates.
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
    echo "<script type=\"text/javascript\"> alert('Hi');</script><br/>';
}




$valid="valid";
    if(!isset($valid))
        echo "<script type=\"text/javascript\"> alert('Hi');</script>";





<script type="text/javascript">
    $valid="valid";
    if(!isset($valid))
        echo "alert('Hi');";
</script>




$file = 'your_images.jpg';

header('Content-Type: image/jpeg');
header('Content-Length: ' . filesize($file));
echo file_get_contents($file);