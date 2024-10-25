<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="imena.css">
    <title>Document</title>
</head>
<body>
   <div>
   <form action="" method="post">
    <input type="number" name="principle" placeholder="enter the principles">;<br><br><br>
    <input type="number" name="rate" placeholder="enter the rate">;<br><br><br>
   <input type="number" name="time" placeholder="enter time">;<br><br><br>
   <input type="submit" value="check" name="yes">;<br><br><br>
   </form>
</div>
   <div>

   <?php
 if(isset($_POST['yes'])){
    $princ=$_POST['principle'];
   }
   if(isset($_POST['yes'])){
    $rate=$_POST['rate'];
   }
   if(isset($_POST['yes'])){
    $time=$_POST['time'];
   }
    echo "the simple interest is :".(($rate*$princ*$time)/100);
    ?></div>
</body>
</html>
