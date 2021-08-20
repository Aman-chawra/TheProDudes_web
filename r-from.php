<?php
$f-name=$_POST['f-name'];
$m-name=$_POST['m-name'];
$l-name=$_POST['l-name'];
$age=$_POST['age'];
$email=$_POST['email'];
$date=$_POST['date'];
$gender=$_POST['gender'];
$metric=$_POST['metric'];
$12th=$_POST['12th'];
$language=$_POST['language'];
$mob1=$_POST['mob1'];
$mob2=$_POST['mob2'];
$password-1=$_POST['password-1'];
$password-2=$_POST['password-2'];
//SQLiteDatabase

$conn=new mysqli('localhost','root','','test');
if ($conn->connect_error) {
  die('connection Falied' : '.$conn->connect_error');}
  else {
    $stmt=$conn->prepare("insert into register(f-name,m-name,l-name,age,email,date,gender,metric,12th,language,mob1,mob2,password-1,password-2)
    values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
      $stmt->bind_param("sssisisiisiiss",$f-name,$m-name,$l-name,$age,$email,$date,$gender,$metric,$12th,$language,$mob1,$mob2,$password-1,$password-2);
      $stmt->execute();
      echo "Registration Succesfull";
      $stmt->close();
      $conn->close();
  }








 ?>
