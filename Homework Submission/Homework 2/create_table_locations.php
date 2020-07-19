<?php

$link = mysqli_connect('localhost','root','','Home_Work2');

if($link == false)
{
    die("Error: Could not Connect." .mysqli_connect_error());
}

$sql = "CREATE TABLE locations(
   Location_id int(4) PRIMARY KEY NOT NULL,
   Street_Adress VARCHAR(40),
   Postal_code VARCHAR(12),
   City VARCHAR(30) NOT NULL,
   State_Provience VARCHAR(25),
   Country_ID VARCHAR(2))";
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