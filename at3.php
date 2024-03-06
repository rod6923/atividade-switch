<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Digite o horario em que você acorda:</label>
            <input type="text" name="horario" id="">
        
       <?php

       if(isset($_POST ['horario'] )) {
        $horario = $_POST ['horario'];
       switch ($horario) {
case 4:
    echo "Você precisa dormir no mínimo as 20 horas";
    break;
    case 5:
        echo "Você precisa dormir no mínimo as 21 horas";
        break;
        case 6:
            echo "Você precisa dormir no mínimo as 22 horas";
            break;
            case 7:
                echo "Você precisa dormir no mínimo as 23 horas";
                break;
                case 8:
                    echo "Você precisa dormir no mínimo as 00 horas";
                    break;
                    case 9:
                        echo "Você precisa dormir no mínimo as 01 horas";
                        break;
                        case 10:
                            echo "Você precisa dormir no mínimo as 02 horas";
                            break;
                            case 11:
                                echo "Você precisa dormir no mínimo as 03 horas";
                                break;
                                case 12:
                                    echo "Você precisa dormir no mínimo as 4 horas";
                                    break;

        }    
    }
      ?>
    </form>
</body>
</html>