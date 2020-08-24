<?php
    $i = 18;

    if ($i >= 2) {
            $result = 'i är större eller lika med 2';
        }

        else {
            $result = 'i är mindre än 2';
        }

    $occupation = 'kock';
    if ($occupation = 'kock'){
        $result2 = 'Kalle är kock';
    }
    elseif ($occupation = svetsare){
        $result2 = 'Kalle är svetsare';
}
    elseif ($occupation = 'kodare'){
        $result2 = 'kalle är kodare';
}
    else {
        $result2 = 'unknown occupation';
    }

    switch ($occupation) {
        case 'kock':
            echo 'kalle är kock';
            break;
        case 'kodare':
            echo 'kalle är kodare';
            break;
        case 'svetsare':
            echo 'kalle är svetsare';
            break;
        default:
            echo 'unknown occupation';
    }

    $x = 7;

    if($x > 2 && $x < 10) {
        $test = 'x är mindre än 10, men större än 2';
}
    else {
        $test = 'x är inte mindre än 10 och större än 2';
    }

$date = date('D');

if ($date === 'Fri'){
    $result3 = 'Idag är det fredag';
}
elseif ($date === 'Sat'){
    $result3 = 'Idag är det lördag';
}
elseif ($date === 'Sun'){
    $result3 = 'Idag är det söndag';
}
elseif ($date === 'Mon'){
    $result3 = 'Idag är det mondag';
}
elseif ($date === 'Tue'){
    $result3 = 'Idag är det tisdag';
}
elseif ($date === 'Wed'){
    $result3 = 'Idag är det onsdag';
}
elseif ($date === 'Thu'){
    $result3 = 'Idag är det torsdag';
}
else {
    $result3 = 'ogiltigt värde';
}

echo $result3
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP Övning</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <p><?php echo $result ?></p>
    <p><?php echo $test ?></p>
    <p><?php echo date('D') ?></p>
    <p><?php echo $result3?></p>
</body>
</html>