<?php

   $image = imagecreatefromjpeg("certificado.jpg");

   $titleColor = imagecolorallocate($image, 0, 0, 0);

   $gray = imagecolorallocate($image, 100, 100, 100);

   imagettftext($image, 32, 0, 320, 250, $titleColor, "fonts" .DIRECTORY_SEPARATOR. "Bevan" .DIRECTORY_SEPARATOR. "Bevan-Regular.ttf" ,"CERTIFICADO");
   imagettftext($image, 32, 0, 375, 350, $titleColor, "fonts" .DIRECTORY_SEPARATOR. "Playball" .DIRECTORY_SEPARATOR. "Playball-Regular.ttf" ,"Giovani Pires");
   imagettftext($image, 8, 0, 410, 380, $gray, "fonts" .DIRECTORY_SEPARATOR. "Bevan" .DIRECTORY_SEPARATOR. "Bevan-Regular.ttf" ,utf8_decode("Concluído em: ").date("d/m/Y"));
   // imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

   header("Content-Type: image/jpeg");
   // imagejpeg($image, "certificado-" .date("Y-m-d"). ".jpg", 10);
   imagejpeg($image);

   imagedestroy($image);


?>