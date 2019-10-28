<?php

   class Veiculos {
      private idveiculo;
      private montadora;
      private modelo;
      private dtcadastro;

      public function getIdveiculo() {
         return $this->idveiculo;
      }
      public function getMontadora() {
         return $this->montadora;
      }
      public function getModelo() {
         return $this->modelo;
      }
      public function getDtcadastro() {
         return $this->dtcadastro;
      }

      public function setIdveiculo($value) {
         $this-idveiculo = $value;
      }
      public function setMontadora($value) {
         $this->montadora = $value;
      }
      public function setModelo($value) {
         $this->modelo = $value;
      }
      public function setDtcadastro($value) {
         $this->dtcadastro = $value;
      }

      public function loadById($id) {
         
         $sql = new Sql();

         $results = $sql->select("SELECT * FROM tb_veiculos WHERE idveiculos = :ID", array(
            ":ID"=>$id
         ));

         if (count($results) > 0) {
            $row = $results[0];

            $this->setIdveiculo($row['idveiculo']);
            $this->setModelo($row['modelo']);
            $this->setMontadora($row['montadora']);
            $this->setDtcadastro(new DateTime($row['dtcadastro']));
         }
      }
   }

?>