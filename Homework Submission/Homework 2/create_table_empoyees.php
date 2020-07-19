<?php

$link = mysqli_connect('localhost','root','','Home_Work2');

if($link == false)
{
    die("Error: Could not Connect." .mysqli_connect_error());
}

$sql = "CREATE TABLE employees(
   Employee_id int(6) PRIMARY KEY NOT NULL,
   First_Name VARCHAR(20),
   Last_Name VARCHAR(25) NOT NULL,
   Email VARCHAR(25) NOT NULL,
   Phone_Number VARCHAR(15),
   Hire_Date DATE NOT NULL,
   Job_Id VARCHAR(10) NOT NULL,
   Salary int(8),
   Comission_pct int(2),
   Manager_id int(6),
   Department_Id int(4)
   )";
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