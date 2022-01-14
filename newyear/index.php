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
// echo date("h:i:sa");

// echo strtotime('2012-03-27 18:47:00');
// echo strtotime('2021-12-31 23:59:59');
// echo strtotime('2021-12-31 23:59:59');
// $long = strtotime('2012-03-27 18:47:00'); //--> which results to 1332866820
// echo date('Y-m-d H:i:s', $long);


//current
$date1 = new DateTime("2021-12-16");
// future
$date2 = new DateTime("2021-12-31");
$interval = $date1->diff($date2);

$constHrs = 23;
$constMins = 59;
$constSecs = 59;
$liveHrs = date('H');
$liveMins = date('i');
$liveSecs = date('s');

$finalHrs = $constHrs - $liveHrs;
$finalMins = $constMins - $liveMins;
$finalSecs = $constSecs - $liveSecs;
// $finalHrs = 0;
// $finalMins = 0;
// $finalSecs = 0;




// shows the total amount of days (not divided into years, months and days like above)
// echo "difference " . $interval->days . " days ";


// current
// echo date('H:i:s');

echo  '<div class="box"><span class="biggertext">' . $interval->m . '</span>' . 
'<span class="MDHMS">' . ' month(s)' . '</span>' . '<br>' . 
'<span class="biggertext">' . $interval->d . '</span>' . '<span class="MDHMS">' . ' days' . '</span>' . '</div>' . '<br>'; 
echo '<div class="box"><span class="biggertext">' . $finalHrs . '</span>' . '<span class="MDHMS">' . " hours " . '</span>' . '</div>' . '<br>';
echo '<div class="box"><span class="biggertext">' . $finalMins . '</span>' . '<span class="MDHMS">' . " minutes " . '</span>' . '</div>' . '<br>';
echo '<div class="box"><span class="secs">' . $finalSecs . '</span>' . '<span class="MDHMSred">' . " seconds " . '</span>' . '</div>' . '<br>';

if($interval->m < 1 && $interval->d < 1 && $finalHrs < 1 && $finalMins < 1) {
    countdown();
}

header("Refresh: 1;");



function countdown() {
    header('Location: newyear.php');
}

?>


</body>
</html>

