<?php
    $url = "http://10.0.15.20/lab8/restapis/superheroes";    
    $response = file_get_contents($url);
    $result = json_decode($response);
   
    echo "Squad Name : $result->squadName<br>";
    echo "Home Town : $result->homeTown<br>";    
    foreach ($result->members as $member) {  
        echo "$member->name ($member->age)<br>";
        echo "<ul>";
        foreach($member->powers as $power){
            echo "<li>$power</li>";
        }
        echo "</ul>";          
    }
?>