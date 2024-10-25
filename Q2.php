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
        $marks=59;

        if($marks>90&&$marks<=100)
        {
            echo "Grade A";
        }
        elseif($marks>80&&$marks<=90){
            echo "Grade B";
        }
        elseif ($marks>=60&&$marks<=80){
            echo "Grade C";
        }
        elseif($marks<=59) {
            echo "Grade D";
        }
        else {
            echo "Invalid Inputs";
        }
    ?>
</body>
</html>