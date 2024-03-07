<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Digite um numero </label>
            <input type="text" name="numero" id="">
        <br>
       <?php

       if(isset($_POST ['numero'] )) {
        $numero = $_POST ['numero'];

    switch ($numero) {
case 1:
    echo "Você está na tabuada do 1";
       for ($i = 1 ; $i <= 10 ; $i++) {
        echo $numero . ' X ' . $i . ' = ' . $numero * $i; 
        echo '<br>';
        }  
        break;
        case 2:
            echo "Você está na tabuada do 2";
               for ($i = 1 ; $i <= 10 ; $i++) {
                echo $numero . ' X ' . $i . ' = ' . $numero * $i; 
                echo '<br>';
                }  
                break;
                case 3:
                    echo "Você está na tabuada do 3";
                       for ($i = 1 ; $i <= 10 ; $i++) {
                        echo $numero . ' X ' . $i . ' = ' . $numero * $i; 
                        echo '<br>';
                        }  
                        break;
                        case 4:
                            echo "Você está na tabuada do 4";
                               for ($i = 1 ; $i <= 10 ; $i++) {
                                echo $numero . ' X ' . $i . ' = ' . $numero * $i; 
                                echo '<br>';
                                }  
                                break;
                                case 5:
                                    echo "Você está na tabuada do 5";
                                       for ($i = 1 ; $i <= 10 ; $i++) {
                                        echo $numero . ' X ' . $i . ' = ' . $numero * $i; 
                                        echo '<br>';
                                        }  
                                        break;
                                        case 6:
                                            echo "Você está na tabuada do 6";
                                               for ($i = 1 ; $i <= 10 ; $i++) {
                                                echo $numero . ' X ' . $i . ' = ' . $numero * $i; 
                                                echo '<br>';
                                                }  
                                                break;
                                                case 7:
                                                    echo "Você está na tabuada do 7";
                                                       for ($i = 1 ; $i <= 10 ; $i++) {
                                                        echo $numero . ' X ' . $i . ' = ' . $numero * $i; 
                                                        echo '<br>';
                                                        }  
                                                        break;
                                                        case 8:
                                                            echo "Você está na tabuada do 8";
                                                               for ($i = 1 ; $i <= 10 ; $i++) {
                                                                echo $numero . ' X ' . $i . ' = ' . $numero * $i; 
                                                                echo '<br>';
                                                                }  
                                                                break;
                                                                case 9:
                                                                    echo "Você está na tabuada do 9";
                                                                       for ($i = 1 ; $i <= 10 ; $i++) {
                                                                        echo $numero . ' X ' . $i . ' = ' . $numero * $i; 
                                                                        echo '<br>';
                                                                        }  
                                                                        break;
                                                                        
        default:
        echo "Somente a tabuada do 1 ao 9!"; 
     }
    
       }
      ?>
    </form>
</body>
</html>