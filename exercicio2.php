<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>

   <form method="POST" action="">
        <label for="numero">Verifica a tabuada de número x:</label>
        <input type="number" id="tabuada_numero" name="tabuada_numero" required>
        <button type="submit" name="tabuada_numero">Verificar</button>
   </form>

   <?php
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['tabuada_numero'])){
        $numero = $_POST['numero'];
        $ehPrimo = true;
        $i = 1;
       while($numero<=$numero*10);
       echo $numero;
       $numero*$i++;



    };
   };
   ?>
 
</body>
</html>