<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Digite quanto você vendeu esse mês</label>
            <input type="text" name="vendas" id="">
        
       <?php

       if(isset($_POST ['vendas'] )) {
       
        $vendas = $_POST ['vendas'];

        switch($vendas) {
            case $vendas <= 500:
                $bonus = $vendas * 0.5;
                echo "Você receberá um bonus de $bonus reais no seu salário";
                break;

                case $vendas <= 1000:
                    $bonus = $vendas * 0.3;
                    echo "Você receberá um bonus de $bonus reais no seu salário";
                    break;
                    
                    case $vendas <= 5000:
                        $bonus = $vendas * 0.2;
                        echo "Você receberá um bonus de $bonus reais no seu salário";
                        break;

                        case $vendas > 5000:
                            $bonus = $vendas * 0.7;
                            echo "Parabéns por sua contribuição, você receberá um bonus de $bonus no seu salário!";
                            break;
                        
                    
                        default:
                            echo "Você não receberá nenhum bonus esse mês";
                            break;
            
    }
}
       
      ?>
    </form>
</body>
</html>