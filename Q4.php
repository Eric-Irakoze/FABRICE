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
    $day=1;
    switch($day){
        case"1" : echo "monday";
        break;
        case"2" :echo "tuesday";
        break;
        case"3" :echo "wednesday";
        break;
        case"4" :echo "thursday";
        break;
        case"5" :echo "friday";
        break;
        case"6" :echo "saturday";
        break;
        case"7" :echo "sunday";
        break;
        dafault :echo"invalid in put";
        break;
    }
    ?>
</body>
</html>