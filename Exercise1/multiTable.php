<?php

for($i = 0; $i < 101; $i++){

    echo "<tr>";

    if($i == 0){
        for($j = 0; $j < 101; $j++){
            if($j == 0){
                echo "<td> </td>";
            } else {
                echo "<td> $j </td>";
            }
        }
    } else {
        for($j = 0; $j < 101; $j++){
            if($j == 0){
                echo "<td> $i </td>";
            } else {
                $x = $i * $j;
                echo "<td> $x </td>";
            }
        }
    }

    echo "</tr>";

}


?>