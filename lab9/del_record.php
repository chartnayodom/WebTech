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
   /* Connect and Open database */
   
   $em_id = 1;
   $sql = "DELETE from COMPANY where ID = $em_id;";
   
   $ret = $db->exec($sql);
   if(!$ret){
     echo $db->lastErrorMsg();
   } else {
      echo $db->changes(), " Record deleted successfully<br>";
   }

   // Close database
   $db->close();
?>