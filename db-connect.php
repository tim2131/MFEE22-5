<?php
$servername="localhost";
$username="MFEE22-5";
$password="mfee225";
$dbname="MFEE22-5";

$conn=new mysqli($servername,$username,$password,$dbname); 

if($conn->connect_error){
    die("連線失敗：".$conn->connect_error);
}else{

}
