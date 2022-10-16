<?php
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    $address = $_POST['address'];
    // echo $id, $name, $age;
    
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

 $sql = "INSERT INTO Employee VALUES($id,'$name',$age,'$address',$salary)";
 $result = $db->query($sql);
 if(!$result){
    echo $db->lastErrorMsg();
 }
 else{
    Header("location: index.php");
    // echo "success";
 }
 

?>
