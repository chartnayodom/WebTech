<?php
    echo "<tr>";
    $i = -6;
    for($i;$i<=31;$i++){
        
        // if($i % 7 == 0 and $i <=7 ){
        //     $i += 1;
        //     echo "<td>$i</td>";
        //     echo "</tr>";
        // }
        if($i % 7 == 0 and $i <= 0){
            $i +=1;
            echo "<td>$i</td>";
            echo "</tr>";
            echo "<tr>";
            // continue;
        }
        else if($i % 7 == 0 and $i > 0){
            echo "<td>$i</td>";
            echo "</tr>";
            echo "<tr>";
            continue;
        }
        
        if($i<0){
            echo "<td>$i</td>";
        }
        if($i>0){
            echo "<td>$i</td>";
        }
        
        
        // if($i % 7 == 6){
        //     echo "</tr>";
        // }
    }
?>