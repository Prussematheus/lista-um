<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa fibonacci</title>
</head>
<body>

   <form method="POST" action="">
        <label for="numero">Verifica sequência de fibonacci:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar_par">Verificar</button>
   </form>

   <?php
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['verificar_par'])){
       $x = 0;
       $y = 1;
       $z = 0;
       while ($b < $numero){
        echo $b . '<br / > ';
        $z = $x;
        $x = $y;
        $y = $y + $z;
       }
            };
        };

   ?>
 
</body>
</html>