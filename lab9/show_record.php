<?php
 // Connect to Database 
 class MyDB extends SQLite3 {
    function __construct() {
       $this->open('wt-company.db');
    }
 }

 // Open Database 
 $db = new MyDB();
 if(!$db) {
    echo $db->lastErrorMsg();
 } else {
    echo "Opened database successfully<br>";
 }
 $sql ="SELECT * from COMPANY";

 $ret = $db->query($sql);
 while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
    echo "ID = ". $row['ID'] . "<br>";
    echo "NAME = ". $row['NAME'] ."<br>";
    echo "ADDRESS = ". $row['ADDRESS'] ."<br>";
    echo "SALARY = ".$row['SALARY'] ."<br><br>";
 }
 echo "Operation done successfully<br>";

 // Close database
 $db->close();
?>