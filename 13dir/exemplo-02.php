<?php

   $images = scandir("images");

   $data = array();

   foreach ($images as $img) {
      if (!in_array($img, array(".", "..") )) {
         $filename = "images" . DIRECTORY_SEPARATOR . $img;

         $info = pathinfo($filename);
         $info["size"] = filesize($filename);
         $info["modified"] = date("d/m/Y H:i:s", fileatime($filename));
         $info["url"] = "http://localhost/08.PHPHCODE/13dir/" .str_replace("\\", "/", $filename);
         
         array_push($data, $info);
      }
   }

   echo json_encode($data);

?>