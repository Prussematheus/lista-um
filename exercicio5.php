<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa Amigo</title>
</head>
<body>

   <form method="POST" action="">
        <label for="numero">Verifica se é um número amigo: </label>
        <input type="number" id="numero1" name="numero1" required>
        <label for="numero"> </label>
        <input type="number" id="numero2" name="numero2" required>
        <button type="submit" name="verificar_par">Verificar</button>
   </form>

   <?php
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['verificar_par'])){
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
      function somaDivisores($numero) {
    $soma = 0;
    for ($i = 1; $i <= $numero/2; $i++) {
        if ($numero % $i == 0) {
            $soma += $i;
        }
    }
    return $soma;
}


function amigos($numero1, $numero2) {
    return (somaDivisores($numero1) == $numero2) && (somaDivisores($numero2) == $numero1);
}
if(amigos($numero1,$numero2)){
    echo"$numero1 e $numero2 são amigos";
} else{
    echo"$numero1 e $numero2 não são amigos";
}
    }
}

   ?>
 
</body>
</html>