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
      <div class="container">
        <h6>Exemplo</h6>
        <hr>
        <?php

        require_once 'config.php';

        echo session_save_path();

        var_dump(session_status());

        echo "<br>";

        switch (session_status()) {
          case PHP_SESSION_NONE:
            echo "Sessões desabilitadas.";
            break;
          case PHP_SESSION_DISABLED:
            echo "Sessões habilitadas, mas não iniciada.";
            break;
          case PHP_SESSION_ACTIVE:
            echo "Sessões habilitadas, e uma iniciada.";
            break;

          default:
            // code...
            break;
        }

        ?>
      </div>
    </pre>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
  <footer>

  </footer>
</html>
