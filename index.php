<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- <form action="student_register.php" method="post">
          <label for="name">Student Name</label><br>
          <input type="text" name="student_name"><br>
          <label for="name">Father Name</label><br>
          <input type="text" name="father_name"><br>
          <label for="name">Mother Name</label><br>
          <input type="text" name="mother_name"><br>
          <label for="name">Contect Number</label><br>
          <input type="text" name="contect_number"><br>
          <label for="name">Aathar Number</label><br>
          <input type="text" name="aathar_number"><br>
          <label for="name">Blood Group</label><br>
          <input type="text" name="blood_group"><br>
          <label for="name">Address</label><br>
          <input type="text" name="address"><br>
          <input type="submit" value="submit" name="submit">
    </form> -->
    <table width=100% border=2>

<tr>
    <th>registerID</th>
    <th>student_name</th>
    <th>father_name</th>
    <th>mother_name</th>
    <th>contect_number</th>
    <th>aathar_number</th>
    <th>blood_group</th>
    <th>address</th>
</tr>


    <?php

$username ="bharath" ; // gghg
$hostname ="localhost"; // 
$password ="1234";

$connection = mysqli_connect($hostname,$username,$password);
$db_select = mysqli_select_db($connection,'student_details');

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $student = $_POST['student_name'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $contect_number = $_POST['contect_number'];
    $aather_number = $_POST['aathar_number'];
    $blood_group = $_POST['blood_group'];
    $address = $_POST['address'];
     
   
    
    
    $sql =  $query = "INSERT INTO student_register(sname,fname,mname,contectno,aatherno,bloodgroup,address) VALUE ('$student','$father_name','$mother_name','$contect_number','$aather_number','$blood_group','$address')";
    $query = mysqli_query($connection,$sql);
}
 
$result = mysqli_query($connection,'SELECT * FROM student_register');

while($row = mysqli_fetch_array($result))
{
    if($row['sname']!='')
    {
      
    echo "<tr>
    <td>{$row['sID']}</td>
    <td><a href='show.php?id={$row['sID']}'>{$row['sname']}</a></td>
    <td>{$row['fname']}</td>
    <td>{$row['mname']}</td>
    <td>{$row['contectno']}</td>
    <td>{$row['aatherno']}</td>
    <td>{$row['bloodgroup']}</td>
    <td>{$row['address']}</td>
</tr>";  
    }
// echo print_r($row);


}


?>
    </table>
    
</body>
</html>