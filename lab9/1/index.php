<?php
    // Connect to Database 
   class MyDB extends SQLite3 {
    function __construct() {
       $this->open('customers.db');
    }
 }

 // Open Database 
 $db = new MyDB();
 if(!$db) {
    echo $db->lastErrorMsg();
 } else {
    // echo "Opened database successfully<br>";
 }

 $sql = 'SELECT * FROM customers';
 $result = $db->query($sql);
 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Lab9_1</title>
</head>
<body>
    <div class="container">
        <table class="table md-6 mt-3">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                
            </tr>
            </thead>
            <tbody>
            <?php 
            $last = 0;
                while($row = $result->fetchArray(SQLITE3_ASSOC)){
                    echo "<tr>
                    <th>".$row['CustomerId']."</th>
                    <th>".$row['FirstName']." ". $row['LastName']."</th>
                    <th>".$row['Address']."</th>
                    <th>".$row['Phone']."</th>
                    <th>".$row['Email']."</th>
                    
                </tr>";
                    $last = $row['CustomerId'];
                }
                // Close database
                $db->close();               
            ?>
            </tbody>
        </table>
    </div>
    <div>
        <form action="delete.php" method="post">
        <button type="submit" name="submit" value="<?php echo $last;?>">Delete last row</button>
        </form>
    </div>
</body>
</html>