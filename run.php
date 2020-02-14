<?php
require_once'phpqrcode/qrlib.php';
if(isset($_POST['qrcode'])){
$name = $_POST['name'];


$path = 'images/';
$file= $path.uniqid().".png";



QRcode::png($name, $file ,'L', 25);

echo "<center><img src='".$file."'></center>";
}
else
{
	echo"please come from qr main page";
}
