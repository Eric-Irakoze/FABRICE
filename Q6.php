<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="imena.css">
    <title>Document</title>
</head>
<body>
<form action="" method="post" required>
    <input type="number" name="number" placeholder="enter your number"required>;
    <input type="submit" value="check" name="yes"required>;
</form>
</body>
</html>
<?php
       if(isset($_POST['yes'])){
        $name=$_POST['number'];
       }
        
    if ($name>0) {
            echo "$name This Is A Positive Number";
        }
        elseif ($name<0) {
            echo "$name This Is A Negative Number";
        }
        elseif($name==0){
            echo "$name  This nummber is zero";
        }
    ?>
    <?php
    
    ?>