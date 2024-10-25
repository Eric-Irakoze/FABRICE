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
    <input type="number" name="n1" placeholder="inter n1" required>;
    <input type="number" name="n2" placeholder="inter n2" required>;
    <input type="number" name="n3" placeholder="inter n3" required>;
    <input type="submit" name="yes"  value="check">;

</form>
<?php
if (isset($_POST['yes'])) {
    $a=$_POST['n1'];
    $b=$_POST['n2'];
    $c=$_POST['n3'];
}
    $discriminant=($b*$b)-(4*$a*$c);
            if ($discriminant>0) {
                echo "Two real solutions";
            } elseif ($discriminant==0) {
                echo "One real solution";
            } else {
                echo "No real solutions";
            }
    ?>
</body>
</html>
