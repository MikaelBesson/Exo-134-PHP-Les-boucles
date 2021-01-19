<?php

// Premiere ligne
echo "ligne 1<br>";
echo"<br>";

$i = 1;
while($i < 6){
    echo $i;
    $i++;
}

//Deuxieme ligne
echo "ligne 2<br>";
echo"<br><br>";

$i = 1;
do
 {
     echo "la variable vaut $i <br>";
     $i++;
 }
while($i < 6);

//Troisieme ligne
echo "ligne 3<br>";
echo"<br><br>";

for($i = 0; $i < 10; $i++) {
    echo "la variable vaut $i<br>";
}


//Quatrieme ligne
echo "ligne 4<br>";
echo"<br><br>";

$colors = array("red", "green", "blue", "yellow");

 foreach($colors as $i) {
    echo "dans ce tableau $i<br>";
}


