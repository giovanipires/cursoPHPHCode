<?php

  // Métodos estáticos

  class Documento {

    private $numero;

    public function getNumero() {
      return $this->numero;
    }

    public function setNumero($numero)  {
      $resultado = Documento::validarCPF($numero);

      if ($resultado == false) {
        throw new Exception("CPF informado não é válido", 1);
      }
      $this->numero = $numero;
    }

    public static function validarCPF($cpf):bool {

      //verifica se um número foi informado
      if(empty($cpf)) {
        return false;
      }

      //elimina possivel mascara
      $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
      $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

    //verifica se a quantidade de números digitados é igual a 11
     if (strlen($cpf) != 11) {
         echo "length";
         return false;
     }

     //verifica sequencias inválidas
     else if ($cpf == '00000000000' ||
         $cpf == '11111111111' ||
         $cpf == '22222222222' ||
         $cpf == '33333333333' ||
         $cpf == '44444444444' ||
         $cpf == '55555555555' ||
         $cpf == '66666666666' ||
         $cpf == '77777777777' ||
         $cpf == '88888888888' ||
         $cpf == '99999999999') {
         return false;

      } else {

         for ($t = 9; $t < 11; $t++) {

             for ($d = 0, $c = 0; $c < $t; $c++) {
                 $d += $cpf{$c} * (($t + 1) - $c);
             }
             $d = ((10 * $d) % 11) % 10;
             if ($cpf{$c} != $d) {
                 return false;
             }
         }

         return true;
     }
        }

  }


  $cpf = new Documento();
  $cpf->setNumero("05495137795");

  var_dump($cpf->getNumero());

?>
