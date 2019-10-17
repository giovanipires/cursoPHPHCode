<?php

  // Atributos e métodos

  class Carro {

    private $modelo;
    private $motor;
    private $ano;

    function getModelo() {
      return $this->modelo;
    }

    function getMotor():float {
      return $this->motor;
    }

    function getAno():int {
      return $this->ano;
    }

    function setModelo($modelo) {
      $this->modelo = $modelo;
    }

    function setMotor($motor) {
      $this->motor = $motor;
    }

    function setAno($ano) {
      $this->ano = $ano;
    }

    public function exibir() {
      return array(
        "modelo"=>$this->getModelo(),
        "motor"=>$this->getMotor(),
        "ano"=>$this->getAno()
      );
    }

  }

  $gol = new Carro();
  $gol->setModelo("GT");
  $gol->setMotor(1.6);
  $gol->setAno(85);
  var_dump($gol->exibir());
  echo "<br/>";
  $gol2 = new Carro();
  $gol2->setModelo("GTS");
  $gol2->setMotor(1.8);
  $gol2->setAno(87);
  var_dump($gol2->exibir());
  echo "<br/>";


?>
