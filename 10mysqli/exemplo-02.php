<?php

   $conn = new mysqli("localhost", "root", "", "dbphp7");

   if ($conn->connect_error) {
      echo "Error: " .$conn->connect_error;
   } else {
      echo "<p>Conexão realizada com sucesso.</p>";
      echo "<hr/>";
   }

   $sql = "SELECT * FROM tb_usuarios";

   $result = $conn->query($sql);

   $data = array();
   
   while ($row = $result->fetch_assoc()) {

      array_push($data, $row);

   }

   echo json_encode($data);

?>