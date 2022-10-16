<?php
// echo $_POST['submit'];
$last = $_POST['submit'];
//     // Connect to Database 
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

 $sql = 'DELETE FROM customers WHERE CustomerId ='.$last;
 $result = $db->query($sql);
 if(!$result){
    echo $db->lastErrorMsg();
 }
 else{
    Header("location: index.php");
    // echo "success";
 }

 
?>