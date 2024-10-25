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
        $price=1000001;

        if($price<=100000)
        {
            echo "Road Tax To Be Paid Is 5%";
        }
        elseif($price>500000&$price<=1000000){
            echo "Road Tax To Be Paid Is 10%";
        }
        elseif ($price>1000000){
            echo "Road Price To Be Paid Is 15%";
        }
        else {
            echo "Invalid Inputs";
        }
    ?>
</body>
</html>