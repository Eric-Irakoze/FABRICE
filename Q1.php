<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="imena.css">
    <title></title>
</head>
<body>
<?php
        $unit=300;

        if($unit<=100)
        {
            echo "No charge";
        }
        elseif($unit>100&&$unit<=200){
            echo "1500 Frw";
        }
        elseif ($unit>200&&$unit<=300){
            echo "2500 Frw";
        }
        else {
            echo "Invalid Inputs";
        }
    ?>
</body>
</html>