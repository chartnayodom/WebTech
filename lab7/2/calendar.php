<?php
    // $d = strtotime("January 2022");
    // echo date("Y-m-d-D h:i:sa", $d);
    echo "<tr>";
    $i = -6;
    // if (date("D,$d") == "Sat"){
    for($i;$i <=1 ;$i++){
        if($i % 7 == 0 and $i <= 0){
            ++$i;
            echo "<td>$i</td>";
            echo "</tr>";
            echo "<tr>";
            // ++$i;
            // continue;
            break;
        }
        else if($i % 7 == 0 and $i > 0){
            echo "<td>$i</td>";
            echo "</tr>";
            echo "<tr>";
            break;
        }
        if($i<0){
            echo "<td>&nbsp</td>";
        }
        if($i>0){
            echo "<td>$i</td>";
        }
    }
    // $i = 2;
    echo $i;
    // }
    for($i=2;$i<=31;$i++){
        
        // if($i % 7 == 0 and $i <=7 ){
        //     $i += 1;
        //     echo "<td>$i</td>";
        //     echo "</tr>";
        // }
        if($i % 8 == 0 and $i <= 0){
            ++$i;
            echo "<td>$i</td>";
            echo "</tr>";
            echo "<tr>";
            // ++$i;
            continue;
        }
        else if($i % 8 == 0 and $i > 0){
            echo "<td>$i</td>";
            echo "</tr>";
            echo "<tr>";
            continue;
        }
        
        if($i<0){
            echo "<td>&nbsp</td>";
        }
        if($i>0){
            echo "<td>$i</td>";
        }
        
        
        // if($i % 7 == 6){
        //     echo "</tr>";
        // }
    }
?>