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
    <pre >
      <div class="container">
        <h4>Exemplo</h4>
        <hr>
        <?php

        $a = 10;

          function trocaValor($a) {
            $a += 50;
            return $a;
          }

          echo "A variável A fora do escopo da função vale: $a<br/>";
          echo "O valor da variável A dentro do escopo da função vale: " .trocaValor($a);


          function trocaValorReferencia(&$b) {
            $b += 50;
            return $b;
          }

          echo "<br/>O valor da variável A dentro do escopo da função por referência vale: " .trocaValorReferencia($a);
        ?>
      </div>
    </pre>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
  <footer>

  </footer>
</html>
