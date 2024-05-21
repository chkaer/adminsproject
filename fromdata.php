<?php
$servername="localhost";
$username="form";
$password="123456";
$dbname="mydb123";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Failed".$conn->connect_error);
}
// echo "Connection succesfully";
// Databse Create
// $sql="CREATE DATABASE mydb123";

// Table Create
// $sql="CREATE TABLE mydetails(
//     id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     fullname VARCHAR(30) NOT NULL,
//     emailid VARCHAR(30) NOT NULL,
//     passwords VARCHAR(40) NOT NULL,
//     contact BIGINT(10) UNIQUE
// )";
$fullname=$_POST['fullname'];
$email=$_POST['emailid'];
$passwords=$_POST['pass'];
$contact=$_POST['contact'];

// data insert 

$sql="INSERT INTO mydetails(fullname,emailid,passwords,contact)
VALUES('$fullname','$email','$passwords','$contact')";


if($conn->query($sql)===true){
    echo header("location:index.html");
}else{
    echo "Data is not insert";
}
// $sql="SELECT * From mydetails";
// $result=$conn->query($sql);

// if($result->num_rows>0){

//     while($row=$result->fetch_assoc()){
//        echo header("location:index.html");
    
//     }
   
// }else{
//     echo "Table not create";
// }
$conn->close();
?>