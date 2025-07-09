<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa Amigo</title>
</head>
<body>

   <form method="POST" action="">
        <label for="numero">Verifica se é um número perfeito: </label>
        <input type="number" id="numero1" name="numero1" required>
        <button type="submit" name="verificar_par">Verificar</button>
   </form>

   <?php
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['verificar_par'])){
        $numero1 = $_POST['numero1'];
      function somaDivs($numero1) {
    $soma = 0;
    for ($i = 1; $i <= $numero1/2; $i++) {
        if ($numero1 % $i == 0) {
            $soma += $i;
        } 
    }
    return $soma;
}
function numPft($numero1) 
{
       $soma = somaDivs($numero1);                  

         return ($soma == $numero1);
                }

           echo "<br>";
                
             if (numPft($numero1)) {
                    echo "$numero1 é perfeito😁";
                } else {
                    echo "$numero1 não é perfeito.😒";
                }
            };
                };
   ?>
 
</body>
</html>