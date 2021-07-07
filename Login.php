<?php
  $server		= "localhost";
	$user		= "root";
	$password	= "";
	$database	= "sebat"; 
	$con = mysqli_connect($server, $user, $password, $database);
    if (mysqli_connect_errno()) {
      echo "Gagal terhubung MySQL: " . mysqli_connect_error();
    }
 
  if($_SERVER['REQUEST_METHOD']=='POST'){
  //Getting values
  $username = $_POST['username'];
  $password = $_POST['password'];

  //Creating sql query
  $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";

  //executing query
  $result = mysqli_query($con,$sql);

  //fetching result
  $check = mysqli_fetch_array($result);

  //if we got some result
  if(isset($check)){//displaying success
      echo "success";
    }else{//displaying failure
      echo "failure";
    }
  mysqli_close($con);
  }

?>