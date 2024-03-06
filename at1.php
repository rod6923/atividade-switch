<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Digite o horario em que você trabalha</label>
            <input type="text" name="horario" id="">
        
       <?php

       if(isset($_POST ['horario'] )) {
        $horario = $_POST ['horario'];
       switch ($horario) {

        case 'Manhã':
            echo 'Bom dia';
            break;
            case 'Tarde':
            echo 'Boa tarde';
            break;
            case 'Noite':
                echo 'Boa noite';
                break;
            default;
            }   
        }    
      ?>
    </form>
</body>
</html>