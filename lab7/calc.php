<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>

<form id="calform" action="calc.php" method="post">
    <input type="text" id="inpvalue" name="inpvalue" value="0" />
    <input type="submit" id="submit" value="Submit">
</form>

</body>
   <!-- form -->
   
    <?php
  
    if (isset($_POST['inpvalue'])) {
        $number = $_POST['inpvalue'];
        $v = intval($number);
        for ($i = 2; $i <= 12; $i++) {
            echo "$v x $i <br>";
        }
    }
    ?>

</body>
</html>