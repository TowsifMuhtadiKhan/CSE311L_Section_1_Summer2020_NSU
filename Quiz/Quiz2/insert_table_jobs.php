<?php

$link = mysqli_connect('localhost','root','','Home_Work2');

if($link == false)
{
    die("Error: Could not Connect." .mysqli_connect_error());
}

$sql = "INSERT INTO jobs VALUES 
        ('AD_PRES','President',20000 , 40000),
        ('AD_VP','Administration Vice President',15000 , 30000),
        ('AD_ASST','Administration Assistant',3000 , 6000),
        ('AD_MGR','Account Manager',8200 , 16000),
        ('AD_ACCOUNT','Public Account',4200 , 9000),
        ('AD_MAN','Sales Manager',10000 , 20000),
        ('AD_REP','Sales Represntative',6000 , 12000),
        ('AD_MAN','Stock Manger',5500 , 8500),
        ('AD_CLERK','Stock Clerk',2000 , 5000),
        ('AD_PROG','Stock Clerk',4000 , 10000),
        ('AD_MAN','Programmer',9000 , 15000), 
        ('AD_REP','Marketing Manager',4000 , 9000);
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