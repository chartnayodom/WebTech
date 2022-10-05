<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab7_1</title>
    <style>
        .result{
            height: 3rem;
            width:50%;
            /* display: inline-flex; */
            border-bottom-style: solid;
            border-color: black;
        }
        .col{
            display: inline-flex;
            width: 15%;    
        }
        
    </style>
</head>
<body>
    <form action="index.php" method="POST">
        <label>กรอกสูตรคูณ : </label>
        <input type="number" id="number" name="number">
        <input type="submit" id="submit" value="แสดงตาราง">
    </form>
    <div class="result">
        <h3 class="col">7</h3>
        <h3 class="col">x</h3>
        <h3 class="col">7</h3>
        <h3 class="col">=</h3>
        <h3 class="col">49</h3>
    </div>
    <?php 
        $number = $_POST['number'];
        $i = intval($number);
        for ($i = 1; $i<= 12; $i++){
            $sum = $number * $i;
            echo "<div class='result'>
            <h3 class='col'>$number</h3>
            <h3 class='col'>x</h3>
            <h3 class='col'>$i</h3>
            <h3 class='col'>=</h3>
            <h3 class='col'>$sum</h3>
        </div>";
        }
    
    ?>
</body>
</html>