<?php

   $cep = "24210520";
   $ch = curl_init();
   $url = "https://viacep.com.br/ws/$cep/json/";


   echo "<h1>Utilizado cURL</h1>";

   curl_setopt($ch, CURLOPT_URL, $url);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //enviar e receber um retorno, interno do curl
   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); //utilizado para usar com o https

   $response = curl_exec($ch);
   curl_close($ch);

   $data= json_decode($response, true);
   print_r($data);


?>