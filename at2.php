<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Digite o seu salário
        </label>
            <input type="text" name="salario" id="">
        
       <?php
       if (isset($_POST['salario'])) {

        $salario = $_POST['salario'];

        switch($salario)
        {
            case $salario <= 1000 :
                $novosalario = $salario * 1.7;
                echo "O seu novo salário é de $novosalario reais ";
                break;
                
            case $salario <= 2000 :
                $novosalario = $salario * 1.5;
                echo "O seu novo salário é de $novosalario reais ";
                break;
                
            case $salario <= 3000 :
                $novosalario = $salario * 1.3;
                echo "O seu novo salário é de $novosalario reais ";
                break;
                
            case $salario < 4000 :
                $novosalario = $salario * 1.1;
                echo "O seu novo salário é de $novosalario reais ";
                break;
                
            case $salario >= 4000 :
                $novosalario = $salario * 1.1;
                echo "O seu novo salário é de $novosalario reais ";
                break;
                
                
           
       }
    }
      ?>
    </form>
</body>
</html>