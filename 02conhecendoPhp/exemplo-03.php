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
      <div class="">
        <?php

        //tipos básicos de variáveis
        $nome = "HCode";
        $site = 'www.hcode.com.br';
        $ano = 1990;
        $salario = 5500.99;
        $bloqueado = false;
        echo "<h4>Exemplos</h4>";
        echo "$site";
        echo "<br/>";
        echo "---------------------- xxx ----------------------";
        echo "<br/>";
        //tipos especiais de variáveis
        $fruta = array("abacaxi", "laranja", "Manga");
        echo $fruta[2];
        echo "<br/>";
        echo "---------------------- xxx ----------------------";
        echo "<br/>";
        $nascimento = new DateTime();
        print_r($nascimento);
        echo "<br/>";
        echo "---------------------- xxx ----------------------";
        echo "<br/>";
        $arquivo = fopen("exemplo-03.php", "r");
        print_r($arquivo);
        echo "<br/>";
        echo "---------------------- xxx ----------------------";
        echo "<br/>";
        $nulo = NULL;
        $vazio = " ";

        ?>
      </div>
    </pre>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
  <footer>

  </footer>
</html>
