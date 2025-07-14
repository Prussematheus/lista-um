<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa Palindromo</title>
</head>
<body>

   <form method="POST" action="">
        <label for="numero">Verifica se a palavra é um palíndromo:</label>
        <input type="text" id="numero" name="numero" required>
        <button type="submit" name="verificar_par">Verificar</button>
   </form>

   <?php
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['verificar_par'])){
          $numero = $_POST['numero'];

                function verificar_palindromo($numero)
                {
                    if ($numero == strrev($numero)) {
                        echo 'A palavra é um palíndromo.';
                    } else {
                        echo 'A palavra não é um palíndromo';
                    };
                };
                echo '<br>';
                echo verificar_palindromo($numero);
            };
        };

   ?>
 
</body>
</html>