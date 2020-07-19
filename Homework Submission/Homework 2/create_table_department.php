<?php

$link = mysqli_connect('localhost','root','','Home_Work2');

if($link == false)
{
    die("Error: Could not Connect." .mysqli_connect_error());
}

$sql = "CREATE TABLE departments(
   Department_id int(10) PRIMARY KEY,
   Department_Name VARCHAR(20),
   Manager_id int(10),
   Location_id int (10))";
if (mysqli_query($link,$sql))
{
 echo "Table Created";
}
 else
 {
   echo "Error : Could not able to create Table." .mysqli_error($link);
 }
 mysqli_close($link)

?>