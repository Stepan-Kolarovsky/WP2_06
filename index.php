<?php

$keyboard[0]['brand'] = "Razer";
$keyboard[0]['type'] = "Mechanická";
$keyboard[0]['color'] = "Černá";
$keyboard[0]['label'] = "BlackWidow V3";

$keyboard[1]['brand'] = "Logitech";
$keyboard[1]['type'] = "Mechanická";
$keyboard[1]['color'] = "Černá";
$keyboard[1]['label'] = "G915 Lightspeed";

$keyboard[2]['brand'] = "Cherry";
$keyboard[2]['type'] = "Mechanická";
$keyboard[2]['color'] = "Růžová";
$keyboard[2]['label'] = "MX Board 8.0";

$keyboard[3]['brand'] = "StealSeries";
$keyboard[3]['type'] = "Mechanická";
$keyboard[3]['color'] = "Černá";
$keyboard[3]['label'] = "Apex Pro TKL";

$keyboard[4]['brand'] = "Asus";
$keyboard[4]['type'] = "Mechanická";
$keyboard[4]['color'] = "Šedá";
$keyboard[4]['label'] = "ROG Claymore";

$keyboard[5]['brand'] = "Roccat";
$keyboard[5]['type'] = "Mechanická";
$keyboard[5]['color'] = "Bílá";
$keyboard[5]['label'] = "Vulcan 122 AIMO";

$person[0]['firstname'] = "Prokop";
$person[0]['lastname'] = "Zeď";
$person[0]['years'] = 14;
$person[0]['weight'] = 60;
$person[0]['height'] = 170;
$person[0]['keyboard'] = $keyboard[3];

$person[1]['firstname'] = "Jaroslav";
$person[1]['lastname'] = "Melichar";
$person[1]['years'] = 16;
$person[1]['weight'] = 75;
$person[1]['height'] = 187;
$person[1]['keyboard'] = $keyboard[2];

$person[2]['firstname'] = "Naco";
$person[2]['lastname'] = "Chata";
$person[2]['years'] = 22;
$person[2]['weight'] = 90;
$person[2]['height'] = 210;
$person[2]['keyboard'] = $keyboard[0];

$person[3]['firstname'] = "Tomáš";
$person[3]['lastname'] = "Jedno";
$person[3]['years'] = 55;
$person[3]['weight'] = 105;
$person[3]['height'] = 177;
$person[3]['keyboard'] = $keyboard[5];

$person[4]['firstname'] = "Andreas";
$person[4]['lastname'] = "Rupp";
$person[4]['years'] = 15;
$person[4]['weight'] = 150;
$person[4]['height'] = 170;
$person[4]['keyboard'] = $keyboard[4];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
for ($i=0; $i < 5; $i++) { 
    echo $person[$i]['firstname'] . " " . $person[$i]['keyboard']['brand'] . " " . $person[$i]['keyboard']['type'] . " " . $person[$i]['keyboard']['color'] . " " . $person[$i]['keyboard']['label'];
    ?> <br>
    <?php
}
?>
</body>
</html>