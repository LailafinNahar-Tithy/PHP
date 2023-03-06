<?php

include("dbconfig.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name=$_POST["name"];
    $number=$_POST["num"];
    $date=$_POST["date"]; 
    $from=$_POST["room"];
    
   $sql="INSERT INTO `request_class`( `Faculty_Name`, `Course_Code`, `Missed_Class_Date`, `Room_Number`, `Status`) VALUES ('$name','$number','$date','$from','Panding')";
   mysqli_query($conn, $sql);
   
   //header("location: Request_Class.php");

}


?>