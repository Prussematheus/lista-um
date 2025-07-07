<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa Primo</title>
</head>
<body>

   <form method="POST" action="">
        <label for="numero_primo">Verifica se é um número primo:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar_zero">Verificar</button>
   </form>

   <?php
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['verificar_numero'])){
        $numero = $_POST['numero'];
        $ehZero = false;
        if($numero < 0){
            $ehZero = false;
        }else{
            for($i = 2; $i <= sqrt($numero); $i++){
                if( $numero % $i == 0 ){
                    $ehPrimo = false;
                    break;
                }
            }
        }
        echo "O número $numero é ". ($ehPrimo ? 'primo':'não é primo');
    };

   };

   ?>
 
</body>
</html>