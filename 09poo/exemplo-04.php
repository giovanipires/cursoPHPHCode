<?php

  // Métodos mágicos

  class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;
    private $uf;

    public function __construct($a, $b, $c, $d) {
      $this->logradouro = $a;
      $this->numero = $b;
      $this->cidade = $c;
      $this->uf = $d;
    }

    public function __destruct() {
      var_dump("DESTRUIR");
    }

    public function __toString() {
      return $this->logradouro. ", " .$this->numero. ", " .$this->cidade. ", " .$this->uf. ".";
    }

    public function getLogradouro() {
      return $this->logradouro;
    }
    public function getNumero() {
      return $this->numero;
    }
    public function getCidade() {
      return $this->cidade;
    }
    public function getUf() {
      return $this->uf;
    }

    public function setLogradouro($logradouro) {
      $this->logradouro = $logradouro;
    }
    public function setNumero($numero) {
      $this->numero = $numero;
    }
    public function setCidade($cidade) {
      $this->cidade = $cidade;
    }
    public function setUf($uf) {
      $this->uf = $uf;
    }

  }

  $meuEndereco = new Endereco("Rua Fagundes Varela", 534, "Niterói", "RJ");
  // var_dump($meuEndereco);
  // unset($meuEndereco);
  echo $meuEndereco;

?>
