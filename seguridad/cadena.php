<?php 
//Método con str_shuffle()
function generateRandomString($length = 10) {
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
}
echo generateRandomString();
$encriptada = sha1(generateRandomString());
echo "<br>";
echo $encriptada;
 ?>