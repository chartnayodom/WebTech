<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Lab7_3</title>
    <style>
        .error{
            color:red;
        }
    </style>
</head>

<body>
<?php
    $name = $_POST["name"];
    $addr = $_POST["address"];
    $age = $_POST["age"];
    $prof = $_POST["prof"];
    $rest = $_POST["rest"];
    if(strlen($name)<5){
        $nameerr = "***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***";
    }
    if(strlen($addr)<5){
        $adderr = "***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***";
    }
    if(strlen($prof)<5){
        $proferr = "***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***";
    }
?>
    <div class="container">
    <h1>Member Registration</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form-group">
            <label for="name">Name:</label><br>
            <input type="text" name="name" id="name" style="width:24rem">
            <span class="error"> <?php echo $nameerr;?></span>
        </div>
        <div class="form-group">
            <label for="address">Address:</label><br>
            <textarea name="address" id="address" cols="50" rows="4"></textarea>
            <span class="error"> <?php echo $adderr;?></span>
        </div>
        <div class="form-group">
            <label for="age">Age:</label><br>
            <input type="text" name="age" id="age" style="width:5rem">
        </div>
        <div class="form-group">
            <label for="prof">Profession:</label><br>
            <input type="text" name="prof" id="prof" style="width:24rem">
            <span class="error"> <?php echo $proferr;?></span>
        </div>
        <div class="form-group">
            <label for="#">Residental status:</label><br>
            <input type="radio" name="rest" id="resident" value="Resident" checked="true">
            <label for="resident">Resident</label>
            <input type="radio" name="rest" id="unresident" value="Non-resident">
            <label for="Unresident">Non-Resident</label>

        </div>
        <input type="submit" value="Submit">
    </form>
    </div>
</body>

</html>