<?php

   $dir1 = "folder_01";
   $dir2 = "folder_02";

   if (!is_dir($dir1)) mkdir($dir1);
   if (!is_dir($dir2)) mkdir($dir2);

   echo "<h1>Rename | Aula 74</h1>";
   echo "<h2>Diretórios criados com sucesso!</h2>";

   $fileName = "README.txt";

   if(!file_exists($dir1 . DIRECTORY_SEPARATOR . $fileName)) {

      $file = fopen($dir1 . DIRECTORY_SEPARATOR . $fileName, "w+");

      fwrite($file, date("Y-m-d H:i:s"));

      echo "<p>Arquivo " . $fileName . " criado com sucesso.</p>";

      fclose($file);

   }

   rename(
      $dir2 . DIRECTORY_SEPARATOR . $fileName, //origem
      $dir1 . DIRECTORY_SEPARATOR . $fileName //destino
   );

   echo "<p>Arquivo " .$fileName. " movido com sucesso.</p>"

?>