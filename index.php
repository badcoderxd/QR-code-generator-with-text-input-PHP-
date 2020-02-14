<?php
require_once'phpqrcode/qrlib.php';

$path = 'images/';
$file= $path.uniqid().".png";

$text= "need to pass variable ";

QRcode::png($text, $file ,'L', 25);

echo "<center><img src='".$file."'></center>";
