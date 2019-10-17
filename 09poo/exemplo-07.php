<!DOCTYPE html>
<html lang="pt_br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Curso Hcode</title>
  </head>
  <body>
      <div class="container">
        <h2>Herança</h2>
        <hr>
        <?php

          class Documento {
            private $numero;

            function getNumero(){
              return $this->numero;
            }

            function setNumero($n){
              $this->numero = $n;
            }
          }

          class CPF extends Documento {

            public function validar():bool {
              $numeroCPF = $this->getNumero();
              return true;
            }
          }

          $doc = new CPF();
          $doc->setNumero("054.951.377-95");
          var_dump($doc->validar());
          echo "<br>";
          echo $doc->getNumero();

        ?>
      </div>
  </body>
</html>
