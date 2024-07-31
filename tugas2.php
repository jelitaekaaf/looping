<?php

for ($i = 1; $i <=20; $i++) {
    if ($i % 1 == 0 && $i % 2 == 1) {
        echo "$i Memuaskan  <br>";
        echo "<hr/>"
    } else if ($i % 2 == 1) {
        echo $i . "Cemerlang <br>"; 
    
    } else if ($i % 3 == 0) {
     echo $i . "Istimewa <br>"; 
    }
}

?>