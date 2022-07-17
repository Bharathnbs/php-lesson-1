<?php
// echo print_r($_GET);

$username ="bharath" ;
$hostname ="localhost";
$password ="1234";

$sid=$_GET['id'];

$conn = mysqli_connect($hostname,$username,$password);
$db_select = mysqli_select_db($conn,'student_details');
$show =mysqli_query($conn,'SELECT * FROM student_register WHERE sID='.$sid);

if($row=mysqli_fetch_array($show)){
    // echo print_r($row);
    echo $row['sID']."<br>".$row['sname']."<br>".$row['fname']."<br>".$row['mname']."<br>".$row['contectno']."<br>".$row['aatherno']."<br>".$row['bloodgroup']."<br>".$row['address'];
}

?>