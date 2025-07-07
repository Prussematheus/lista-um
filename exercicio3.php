<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa Zero</title>
</head>
<body>

   <form method="POST" action="">
        <label for="numero">Verifica se é menor, igual ou maior que zero:</label>
        <input type="number" id="verificar_numero" name="numero" required>
        <button type="submit" name="verificar_zero">Verificar</button>
   </form>

   <?php
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['verificar_zero'])){
        $numero = $_POST['numero'];
        if($numero > 0){
            echo "O número $numero é positivo";
        }else if($numero == 0){
            echo "O número $numero é zero";
        }
            else{
                echo "O número $numero é negativo";
            }
        }
    }

   ?>
 
</body>
</html>