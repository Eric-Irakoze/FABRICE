<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="imena.css">
    <title>Document</title>
</head>
<body>
 <form  method="post">
    <input type="number" name="number" placeholder="inter amount">;
    <input type="button" value="check" name="yes">;
 </form>
</body>
</html>
<?php
        if (isset($_POST['yes'])) {
        $am=$_POST['number'];
        }

        $left=(1000-$am);
        if ($am>1000) {
            echo "The Amount Is:".($am-(($am*10)/100));
        }
        elseif ($am<=1000) {
            echo "Your Amount Is $am Add $left To Get Discount";
        }
        else {
            echo "Invalid Input";
        }
   ?>