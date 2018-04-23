<?php 

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5 , 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5 , 440, 250, "Luiz Ferreira", $titleColor);
imagestring($image, 5 , 400, 370, utf8_decode("Conluído em:") . date("d/m/Y"), $titleColor);

header("Content-Type: image/jpeg");

imagejpeg($image, "certificado-" . date("Y-m-d"). ".jpg", 10);

imagedestroy($image);



 ?>