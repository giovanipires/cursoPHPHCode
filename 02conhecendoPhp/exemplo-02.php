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

        //Camel case
        $anoNascimento = 1980;
        $mesDeNascimento = "Novembro";
        echo "O seu ano de nascimento é: " .$anoNascimento. " e seu mês de nascimento é: " .$mesDeNascimento;

        //limpar variavel, e definir verificação
        //unset => destrói a variável
        //isset => verifica se a variável existe
        unset($anoNascimento);
        if (isset($anoNascimento)) {
          echo $anoNascimento;
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
