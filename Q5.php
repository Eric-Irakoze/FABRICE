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
        $month=3;

        if($month==1)
        {
            echo "January";
        }
        elseif($month==2){
            echo "Febuary";
        }
        elseif ($month==3){
            echo "March";
        }
        elseif($month==4) {
            echo "April";
        }
        elseif($month==5) {
            echo "May";
        }
        elseif($month==6) {
            echo "June";
        }
        elseif($month==7) {
            echo "July";
        }
        elseif($month==8){
            echo "August";
        }
        elseif ($month==9){
            echo "September";
        }
        elseif($month==10) {
            echo "October";
        }
        elseif($month==11) {
            echo "November";
        }
        elseif($month==12) {
            echo "December";
        }
        else {
            echo "Invalid Inputs";
        }
    ?>
</body>
</html>