<?php
$myFile = "test.php";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = "<!DOCTYPE HTML><html><head>\n";
fwrite($fh, $stringData);
$stringData = "Pointy Pinto\n";
fwrite($fh, $stringData);
fclose($fh);
?>