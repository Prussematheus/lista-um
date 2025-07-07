<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa Par</title>
</head>
<body>

   <form method="POST" action="">
        <label for="numero">Verifica se é um número par ou ímpar:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar_par">Verificar</button>
   </form>

   <?php
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['verificar_par'])){
        $numero = $_POST['numero'];
        $ehPar = true;
                if( $numero % 2 == 0 ){
                    $ehPar = true;
                }else{
                    $ehPar = false;
                };
            };
        };
        echo "O número $numero é ". ($ehPar ? 'par':'ímpar');

   ?>
 
</body>
</html>