<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Números entre os números</title>
</head>
<body>

   <form method="POST" action="">
        <label for="numero">Informe dois números: </label>
        <input type="number" id="numero1" name="numero1" required>
        <label for="numero"> </label>
        <input type="number" id="numero2" name="numero2" required>
        <button type="submit" name="verificar_par">Soma os números entre os informados</button>
   </form>

   <?php
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['verificar_par'])){
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        if (is_numeric($numero1) && is_numeric($numero2)){
            $numero1=$numero1;
            $numero2=$numero2;

            $soma = 0;
            for($i = min($numero1,$numero2)+1; $i < max($numero1, $numero2); $i++){
                $soma += $i;
            }
            echo "A soma dos números entre ". min($numero1,$numero2) . " e " . max($numero1, $numero2) . " é " . $soma;
        } else
        echo "coloque números válidos";
    }
}

   ?>
 
</body>
</html>