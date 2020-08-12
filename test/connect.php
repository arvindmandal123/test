<?php
   
   
$host='remotemysql.com';
$db='xtvsU9LQem';
$user='xtvsU9LQem';
$password='HHZwGDxSrc';




  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $number = $_POST['number'];




  //Datbase connecton

  $conn = new mysqli('localhost','root','','test2');
  if($conn->connect_error){
  	die('Connection failed  : '.$conn->connect_error);
  }else{
  	
  	$sql = "insert into registration(firstName,lastName,gender,email,password,number) values ('$firstName', '$lastName' , '$gender', '$email', '$password', '$number')";
  	if($conn->query($sql))
  	{
  		echo "Insert success";
  	} else {
  		echo "Error: " . $sql . "<br>" . $conn->error;
  	}
  	
  	$conn->close();
  }
  ?>