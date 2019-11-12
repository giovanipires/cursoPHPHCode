<?php

   $data = array(
         "empresa"=>"Hcode Treinamentos"
   );

   echo "<h1>Cookies | aula 76</h1>";

   setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

   echo "Ok, cookie criado com sucesso.";


?>
