<?php
error_reporting(E_ALL);
$ch = curl_init("https://www.borsadirekt.com/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_NOBODY, 0);
$zer = curl_exec($ch);
preg_match_all('@<div class="col-md-2 col-xs-6 li (.*?)">(.*?)</div>@si',$zer,$ncek);
print_r(strip_tags($ncek[0][0])." - ");
print_r(strip_tags($ncek[0][1])." - ");
print_r(strip_tags($ncek[0][2])." - ");
print_r(strip_tags($ncek[0][3])." - ");
print_r(strip_tags($ncek[0][4])." -");
print_r(strip_tags($ncek[0][5]));
curl_close($ch);
?>
