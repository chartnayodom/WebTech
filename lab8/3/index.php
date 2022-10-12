<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab8_3</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        p {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .learn {
            text-decoration: none;
            border: 0px hidden;
            margin-right: 1rem;
            border-radius: 5px;
        }
        body{
            background-color: hsla(0deg,0%,70%,100%);
        }
        .more{
            background-color: hsla(180deg,100%,30%,100%);
            
        }
        a{
            color: whitesmoke;
        }
    </style>
</head>
<?php
$url = "https://www.themealdb.com/api/json/v1/1/random.php";
$response = file_get_contents($url);
$result = json_decode($response);
// echo $result->meals;
foreach ($result->meals as $food) {
    // echo $food->strImageSource.'<br>';
    // echo $food->strSource.'<br>';
    // echo $food->strMeal.'<br>';
    // echo $food->strInstructions.'<br>';
    $image = $food->strMealThumb;
    $name = $food->strMeal;
    $link = $food->strSource;
    $ins = $food->strInstructions;
}
?>

<body>
    <div class="container">
        <div class="card text-center sm-5 p-5 mt-5 shadow" style="max-width: 60%; margin-left:20%;">
            <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>">
            <div class="card-body">
                <h4 class="card-title"><?php echo $name; ?></h4>
                <p class="card-text"><?php echo $ins; ?></p>
                <div class="btn-group">
                    <button class="learn" onclick="location.reload()"><span class="material-icons">
                            refresh
                        </span></button>
                    <button class="learn more"><a href="<?php echo $link; ?>" target="_blank">Learn More</a></button>
                </div>
            </div>
        </div>




    </div>
</body>

</html>