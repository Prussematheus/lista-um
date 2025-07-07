<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>
<body>

   <form method="POST" action="">
        <label for="numero">Realiza o fatorial do número:</label>
        <input type="number" id="fatorial_numero" name="fatorial_numero" required>
        <button type="submit" name="fatorial">Verificar</button>
   </form>

   <?php
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['fatorial_numero'])){
        $numero = $_POST['fatorial_numero'];
        $fatorial = 1;
        $conta = 1;
        while ($conta<=$numero){
            $fatorial *= $conta;
            $conta++;
    }
    echo "O fatorial é $fatorial";
    };
   };
   ?>
 
</body>
</html>