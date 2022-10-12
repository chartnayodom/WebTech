<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Lab8_4</title>
</head>
<?php
    $url = "http://10.0.15.20/lab8/restapis/10countries";
    $response = file_get_contents($url);
    $result = json_decode($response);
    // foreach($result as $country){
    //     echo $country->name;
    //     echo $country->capital;
    //     echo $country->population;
    //     echo $country->region;
    //     echo $country->latlng;
    //     foreach($country->borders as $bd){
    //         echo $bd + " ";
    //     }
    // }
?>  
<body>
    <div class="container mt-5">
        <?php foreach($result as $country){
            $bd = "";
            
        echo "<div class='row mb-5'>
        <div class='col-md-5'>
            <p class='font-weight-bold'>Name : $country->name </p>
            <p>Capital : $country->capital</p>
            <p>Population : $country->population</p>
            <p>Region : $country->region</p>
            <p>Location : ". $country->latlng[0] ." ".$country->latlng[1]."</p>";
        echo "<p>Borders : "; 
        foreach($country->borders as $bdr){
                echo $bdr." "; } 
                
        echo "</p>";
            
            
        echo "</div>
        <div class='col-md-5'>
            <img src=\"".$country->flag."\" alt='flag$country->name' style='max-width:80%;'>
        </div>
    </div>";
        
    }?>
    
    </div>
</body>
</html>