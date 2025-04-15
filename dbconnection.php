<?php

$server="localhost";
$user="root";
$password="";
$dname="go shoply e-commerce";
//create connection
$conn= new mysqli_connect($server,$user,$password,$dbname);
//check connection
if($conn==false){
die("Connection error ".mysqli_connect_error());
}