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

          function ola() {
            $argumentos = func_get_args();
            return $argumentos;
          }

          var_dump(ola("Bom dia", 10, [1,2,3]));


        ?>
      </div>
    </pre>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
  <footer>

  </footer>
</html>
