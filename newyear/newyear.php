<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
<?php 
// december 31st 11:59:59:pm
date_default_timezone_set("America/Edmonton");




$constSecs = 59;

$liveSecs = date('s');


$finalSecs = $constSecs - $liveSecs;






// shows the total amount of days (not divided into years, months and days like above)
// echo "difference " . $interval->days . " days ";


// current
// echo date('H:i:s');


echo '<div class="box"><span class="newyearsecs">' . $finalSecs . '</span>' . '<br>' . '<span class="MDHMSred">' . " seconds " . '</span>' . '</div>' . '<br>';

if ($finalSecs < 1) {
    header('Location: celebration.php');
}

header("Refresh: 1;");





?>


</body>
</html>






