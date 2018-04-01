<?php
/**
 * Created by kadirkasim.com
 * Developer: Kadir Kasim
 * Date: 31.03.2018
 * Time: 01:14
 */

$str1 = 'Kadir KASIM';
$str2 = 'Php string fonksiyonlari';
$str3 = 'kullanim ornekleri';


echo strlen($str1)."<br>";
echo strstr($str2, 'nk')."<br>";

echo strpos($str3,'i')."<br>";
echo substr($str3,2,6)."<br>";


echo str_replace('string','Düz metin',$str2)."<br>";
echo str_repeat($str1 , 3)."<br>";

echo trim($str2)."<br>";
echo ltrim($str2)."<br>";
echo rtrim($str2)."<br>";


echo ucwords($str2)."<br>";
echo ucfirst($str2)."<br>";

echo strtolower($str2)."<br>";
echo strtoupper($str2)."<br>";