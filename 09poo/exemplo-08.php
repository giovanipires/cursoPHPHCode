<!DOCTYPE html>
<html lang="pt_br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Curso Hcode</title>
  </head>
  <body>
      <div class="container">
        <h2>Interface</h2>
        <hr>
        <?php

          /**
           *
           */
          interface Veiculo {

            public function acelerar($velocidade);
            public function frenar($velocidade);
            public function trocarMarcha($marcha);
          }

          /**
           *
           */
          class Civic implements Veiculo {

            public function acelerar($velocidade){
              echo "O veículo acelerou ate ".$velocidade ."km/h<br/>";
            }
            public function frenar($velocidade){
              echo "O veículo frenou ate ".$velocidade ."km/h<br/><br/>";
            }
            public function trocarMarcha($marcha){
              echo "O véiculo engatou a ". $marcha ." marcha.<br/>";
            }

          }

          $carro = new Civic();
          $carro->trocarMarcha("primeira");
          $carro->acelerar(30);
          $carro->trocarMarcha("segunda");
          $carro->acelerar(50);
          $carro->trocarMarcha("terceira");
          $carro->acelerar(65);
          $carro->trocarMarcha("quarta");
          $carro->acelerar(85);

          $carro->frenar(55);
          $carro->trocarMarcha("terceira");


        ?>
      </div>
  </body>
</html>
