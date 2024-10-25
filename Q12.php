<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="imena.css">
    <title>Document</title>
</head>
<body>
    <?php
        $num1=5;
        $num2=1;
        $num3=12;

        if ($num1>$num2&$num3) {
            echo "the biggest number is :".$num1;
        }
        elseif ($num2>$num1&$num3) {
            echo "the biggest number is :".$num2;
        }
      elseif($num3>$num1&$num2){
        echo "the biggest number is :".$num3;
      }
      else{
        echo"invalid input";
      }
    ?>
</body>
</html>