<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','GIC');
 
$con = mysqli_connect(HOST,USER,PASS,DB);
 
$email=$_GET["email_id"];

$query="Select first_name,last_name,email_id,mobile_no,enrollment_no,clg_name from user_details where email_id='$email'";
$r = mysqli_query($con,$query);
 
 $res = mysqli_fetch_array($r);
 
 $result = array();
 
 array_push($result,array(
 "fname"=>$res['first_name'],
 "lname"=>$res['last_name'],
 "email"=>$res['email_id'],
"enroll"=>$res['enrollment_no'],
 "mobileno"=>$res['mobile_no'],
"college"=>$res['clg_name']
 ));
 
 echo json_encode(array("result"=>$result));
 
 mysqli_close($con);
?>