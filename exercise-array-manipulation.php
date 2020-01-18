<?php

function showTitle($title)
{
echo "<br/><b>&#9830; $title</b><br/>";
echo '<hr/>';
}

$colors = array(
'red',
'blue',
'black',
'green',
'grey',
);

showTitle('Exercise 1');

/*
sort($colors);
print_r($colors);
$clength = count($colors);
for($i = 0; $i < $clength; $i++) {
    echo $colors[$i];

    echo "<br>";
}
//echo $colors[1];
*/
sort($colors);
echo join("<br>",$colors).'<br>';
//echo '<br>'.implode("<br>",$colors);

showTitle('Exercise 2');

echo strtoupper(implode("<br>",$colors)).'<br>';

showTitle('Exercise 3');

$otherColors = array(
'green',
'blue',
'black',
);

echo implode(" ",array_merge($colors,$otherColors));