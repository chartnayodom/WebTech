<?php    
    
    $url = "https://covid19.ddc.moph.go.th/api/Cases/timeline-cases-all";
    $response = file_get_contents($url);
    $result = json_decode($response);

   foreach ($result as $case) {      
        echo "ข้อมูลวันที่ : $case->txn_date ";    
        echo "จำนวนผู้ติดเชื้อ : $case->new_case "; 
        echo "<br>";            
    } 
    
?>