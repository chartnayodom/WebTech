<?php
$url = "http://10.0.15.20/lab8/restapis/currencyrate";
$response = file_get_contents($url);
$result = json_decode($response);
$famou = 0;
$sum = 0;
if (isset($_POST['submit'])) {
    $fcur = filter_input(INPUT_POST, 'f_curr');
    // echo $fcur;
    $tcur = filter_input(INPUT_POST, 't_curr');
    // echo $result->rates->THB;

    $famou = $_POST["f_amo"];

    $eur = ($famou / $result->rates->$fcur) + 1;
    // echo $eur;
    $sum = sprintf("%.2f", ($eur - 1) * $result->rates->$tcur);
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
    <title>Lab8_1</title>
    <style>
        * {
            font-family: 'Mitr', sans-serif;
        }
    </style>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div>
            <h1>Currency Converter</h1>
            <label for="f_curr">From : </label>
            <select name="f_curr" id="f_curr">
                <option value="THB">THB</option>
                <option value="JPY">JPY</option>
                <option value="CNY">CNY</option>
                <option value="SGD">SGD</option>
                <option value="USD">USD</option>
            </select>
            <input type="text" name="f_amo" id="f_amo" value="<?php echo $famou; ?>">
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
            <input type="text" name="t_amo" id="t_amo" value="<?php echo $sum; ?>">
        </div>
        <button type="submit" name="submit" id="sub">Convert</button>

    </form>
    <!-- <script>
document.getElementById("sub").addEventListener("click", function(event){
  event.preventDefault()
});
</script> -->
</body>

</html>