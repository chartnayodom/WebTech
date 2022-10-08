<?php
    $url = "http://10.0.15.20/lab8/restapis/currencyrate";
    $response = file_get_contents($url);
    $result = json_decode($response);

    $fcur = filter_input(INPUT_POST, 'f_curr', FILTER_SANITIZE_STRING);
    // echo $fcur;
    $tcur = filter_input(INPUT_POST, 't_curr',FILTER_SANITIZE_STRING);
    // echo $result->rates->THB;
    $famou = $_POST["f_amo"];
    
    $eur = $famou / $result->rates->$fcur;
    echo $eur;
    $sum = sprintf("%.2f",$eur * $result->rates->$tcur);
    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab8_1</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div>
            <label for="f_curr">From : </label>
            <select name="f_curr" id="f_curr">
                <option value="THB">THB</option>
                <option value="JPY">JPY</option>
                <option value="CNY">CNY</option>
                <option value="SGD">SGD</option>
                <option value="USD">USD</option>
            </select>
            <input type="text" name="f_amo" id="f_amo" value="<?php echo $famou;?>">
        </div>
        <div>
            <label for="t_curr">To : </label>
            <select name="t_curr" id="t_curr">
                <option value="THB">THB</option>
                <option value="JPY">JPY</option>
                <option value="CNY">CNY</option>
                <option value="SGD">SGD</option>
                <option value="USD">USD</option>
            </select>
            <input type="text" name="t_amo" id="t_amo" value="<?php echo $sum;?>">
        </div>
        <button type="submit" id="sub">Convert</button>
        <?php
        ?>
    </form>
    <!-- <script>
document.getElementById("sub").addEventListener("click", function(event){
  event.preventDefault()
});
</script> -->
</body>
</html>