<?php
define('BUFSIZ', 4095);
$url = 'https://ds1.nkiserv.com/Holly/Panama.(NKIRI.COM).2022.WEBRip.DOWNLOADED.FORM.NKIRI.COM.mkv'; 
$rfile = fopen($url, 'r');
$lfile = fopen(basename($url), 'w');
while(!feof($rfile))
fwrite($lfile, fread($rfile, BUFSIZ), BUFSIZ);
fclose($rfile);
fclose($lfile);
?>