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

          $pessoa = array(
            'nome' =>'João',
            'idade' =>20
          );


          foreach ($pessoa as &$value) {
            if (gettype($value) === 'integer') $value += 10; {
              // code...
            }
            echo "$value<br>";
          }

          print_r($pessoa);

        ?>
      </div>
    </pre>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
  <footer>

  </footer>
</html>
