<?php

ini_set("display_errors",1);//to show or hide errors
session_start();//session always maintain on page otherwise it will log out you from that page when given time limit exceeds
$host="localhost";//database se connect karne ke liya sabse pehle host ya server name ki jarurrat apdti h
$username="root";
$password="";
$db="bms-t";//database bhi likh sakte h

$conn= new mysqli("localhost","root","","bms-t");//($host,$username,$password,$db);
if($conn->connect_error){
   echo 'failed';
}
else{
   echo 'pass';
}
?> 
