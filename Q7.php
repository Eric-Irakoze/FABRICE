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
    <input type="number" name="num1" placeholder="enter number">;
    <input type="submit" value="check" name="yes">;
</form>
</body>
</html>
<?php
        if(isset($_POST['yes'])){
            $num=$_POST['num1'];
           }

        if ($num%2==0&$num%3==0) {
            echo "This Number Is A Multiple Of 2 And 3";
        }
        elseif($num%2==0){
            echo "This number is multiple of 2 but not multiple of 3";     
           }
           elseif($num%3==0){
           echo "This number is multiple of 3 but not multiple of 2";
           }
           elseif($num==0){
            echo"enter the number";
           }

        else {
            echo "This Number Isn't A Multiple Of 2 And 3";
        }
    ?>