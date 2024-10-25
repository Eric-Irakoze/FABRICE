<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="imena.css">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="number" name="mass" placeholder="enter the mass">;
    <input type="text" name="height" placeholder="enter the height">;
   <input type="submit" value="check" name="yes">;
   </form>

</body>
</html>
<?php

if(isset($_POST['yes'])){
    $mass=$_POST['mass'];
   }
   if(isset($_POST['yes'])){
    $height=$_POST['height'];
   }
        $bmi=($mass/$height);

        if ($bmi<18.5) {
            echo "Underweight";
        }
        elseif ($bmi>=18.5&$bmi<25) {
            echo "Normal weight";
        }
        elseif ($bmi>=25&$bmi<30) {
            echo "Overweight";
        }
        else {
            echo "Obesity";
        }
    ?>