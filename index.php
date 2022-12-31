<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $i=0;
        while($i<=10){
            $prod=2*$i;
            echo '2' . 'x' .$i. '=' .$prod. '<br>';
            $i++;
        }

        $x=20;
        if($x>10){
            echo $x."est superieur a 10 <br><br>";
        }else{
            echo $x. " est inferieur a 10";
        }

    ?>
</body>
</html>