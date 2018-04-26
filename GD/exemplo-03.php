<?php 

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext(
	$image, 32 , 0, 450, 150, $titleColor, "fonts".DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf"  ,"CERTIFICADO" );
imagettftext($image, 32 , 440, 250, $titleColor,"fonts".DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Luiz Ferreira");
imagestring($image, 5 , 400, 370, utf8_decode("Conluído em:") . date("d/m/Y"), $titleColor);

header("Content-Type: image/jpeg");

// imagejpeg($image, "certificado-" . date("Y-m-d"). ".jpg", 10);

imagejpeg($image);

imagedestroy($image);



 ?>