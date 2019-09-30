<!DOCTYPE html>
<html lang="pt_br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/master.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Curso HCode</title>
  </head>
  <header>

  </header>
  <body>
    <pre>
      <div>
        <?php
          echo "<br/>";

          //atribuição

          $nome = "valor";
          $valorTotal = 0;
          echo $valorTotal ."<br/>";
          $valorTotal += 100;
          echo $valorTotal ."<br/>";
          $valorTotal *= .9;
          echo $valorTotal ."<br/>";

          //aritiméticos (+ - * / % **)
          $a = 5;
          $b = 2;
          echo $a + $b ."<br/>";
          echo $a - $b ."<br/>";
          echo $a * $b ."<br/>";
          echo $a / $b ."<br/>";
          echo $a % $b ."<br/>";
          echo $a ** $b ."<br/>";

          //operadores lógicos
          var_dump($a > $b);
          echo "<br/>";
          var_dump($a < $b);
          echo "<br/>";
          var_dump($a == $b);
          echo "<br/>";
          var_dump($a === $b);
          echo "<br/>";
          var_dump($a != $b);
          echo "<br/>";
          var_dump($a !== $b);
          echo "<br/>";

          //space chip

          var_dump($a <=> $b); //usado para comparações de menor, maior ou igual apresenta informações int(1) quando maior e int(-1) quando menor
          echo "<br/>";

          //null collapse
          $c = NULL;

          echo $c ?? $a ."<br/>";
          echo $c ?? $b ."<br/>";

          //incremento e decremento
          echo $a++ . "<br/>";
          echo $a ."<br/>";
          echo $a-- . "<br/>";
          echo $a ."<br/>";


        ?>
      </div>
    </pre>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
  <footer>

  </footer>
</html>
