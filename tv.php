<?php
$t = $_GET['t'];
$text = file_get_contents( $t );
$price =  explode("EXTINF", $text);
$count = count($price);
for ($i = 1; $i < $count; $i++) {
    preg_match('/:-1,(.*?)\#EXTGRP:(.*?)(http.*?)\#/Us', $price[$i], $matches);
    if(strpos($matches[2], 'РЕГИОНАЛЬНЫЕ') !== false)
{
    echo "BEGIN:VCARD<br>VERSION:3.0<br>N;CHARSET=utf-8:$matches[1];;;<br>ORG:$matches[2];<br>TITLE:$matches[3]<br>END:VCARD<br><br>";
}
?>
