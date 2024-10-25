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
        $num=2;
        $num2=3;
        $oper="+";

        switch ($oper) {
            case '+':
                echo $num + $num2;
                break;
            case '-':
                echo $num - $num2;
                break;
            case '*':
                echo $num * $num2;
                break;
            case '/':
                echo $num / $num2;
                break;
            
            default:
                echo "Invalid Operator";
                break;
        }
    ?>
</body>
</html>