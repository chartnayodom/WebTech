<?php
     // Connect to Database 
    class MyDB extends SQLite3 {
    function __construct() {
       $this->open('mycompany.db');
    }
}
    // Open Database 
    $db = new MyDB();
    if(!$db) {
        echo $db->lastErrorMsg();
    } else {
    // echo "Opened database successfully<br>";
    }

 $sql = 'SELECT * FROM Employee';
 $result = $db->query($sql);
 if(!$result){
    echo $db->lastErrorMsg();
 }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Lab9_2</title>
</head>
<body class="container">
    <div class="container-fluid md-6 mt-3">
        <form action="addrow.php" method="post">
            <div class="form-group">
                <label for="id">ID : </label>
                <input type="text" name="id" id="id" style="width:15%">
            </div>
            <div class="form-group">
                <label for="name">Name : </label>
                <input type="text" name="name" id="name" style="width:60%">
            </div>
            <div class="form-group">
                <label for="age">Age : </label>
                <input type="text" name="age" id="age" style="width:7%">
            </div>
            <div class="form-group">
                <label for="salary">Salary : </label>
                <input type="text" name="salary" id="salary" style="width:20%">
            </div>
            <div class="form-group">
                <label for="address">Address : </label>
                <textarea name="address" id="address" cols="50" rows="5"></textarea>
            </div>
            <div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
    <div>
        <h1>List of Employees</h1>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Salary</th>
            </tr>
            <?php 
            // $last = 0;
                while($row = $result->fetchArray(SQLITE3_ASSOC)){
                    echo "<tr>
                    <th>".$row['EmployeeId']."</th>
                    <th>".$row['EmployeeName']."</th>
                    <th>".$row['EmployeeAge']."</th>
                    <th>".$row['EmployeeAddress']."</th>
                    <th>".$row['EmployeeSalary']."</th>
                    
                </tr>";
                    // $last = $row['CustomerId'];
                }
                // Close database
                $db->close();               
            ?>
        </table>
    </div>
</body>
</html>