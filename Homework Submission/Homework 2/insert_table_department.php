<?php

$link = mysqli_connect('localhost','root','','Home_Work2');

if($link == false)
{
    die("Error: Could not Connect." .mysqli_connect_error());
}

$sql = "INSERT INTO departments VALUES 
        (10,'Administration',200 , 1700),
        (20,'Marketing',201 , 1800),
        (50,'Shipping',124 , 1500),
        (60,'It',103 , 1400),
        (80,'Sales',149, 2500),
        (90,'Executive',100 , 1700),
        (110,'Accounting',205 , 1700), 
        (190,'Contracting', NULL , 1700);
";
if (mysqli_query($link,$sql))
{
 echo "VALUES INSERTED";
}
 else
 {
   echo "Error : Could not able to create Table." .mysqli_error($link);
 }
 mysqli_close($link)

?>