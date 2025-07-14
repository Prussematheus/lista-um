<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa Pares</title>
</head>
<body>

   <form method="POST" action="">
        <label for="numero">Verifica os pares de 1 até x:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar_par">Verificar</button>
   </form>

   <?php
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['verificar_par'])){
        $numero = $_POST['numero'];
         for ($i = 1; $i <= $numero; $i++){
            if($i % 2 == 0){
                echo "<br>";
                echo $i . " ";
            }
         }  
    }
}
   ?>
 
</body>
</html>