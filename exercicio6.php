<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>divisores de um número</title>
</head>
<body>

   <form method="POST" action="">
        <label for="numero">Verifica os divisores de um número: </label>
        <input type="number" id="numero1" name="numero1" required>
        <button type="submit" name="verificar_par">Verificar</button>
   </form>

   <?php
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['verificar_par'])){
        $numero1 = $_POST['numero1'];
      for ($i = 1 ; $i <= $numero1; $i++) {
        if ($numero1 % $i == 0) {
          echo  $i . "; ";
        };
    };
};
};
   ?>
 
</body>
</html>