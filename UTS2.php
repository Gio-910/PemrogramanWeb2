<?php

echo "<table border=1>";
for($s = 0; $s <= 10; $s++){
    if($s % 2)  {
        echo "<tr>";
    } else{
        echo "<tr style='background-color: green;'>";
    }
    for($i = 0; $i <= 5; $i++){
        echo "<td >Kolom {$i}, baris{$s} </td>";
        }
    echo "</tr>";
}

echo "</table>";

?>