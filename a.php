<?php
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="keybord+++";
 $conn="new musqli($servername,$username,$password,$dbname)
 if($conn->connect_error)
 {
    die("error deleted".mysqli_error($con));
 }
 $name=$_POST['name'];
 $mail=$_POST['mail'];
 $message=$_POST['message'];

 $sql=INSERT INTO `table1` (`sr no`, `name`, `mail`, `message`) VALUES ('$srno', '$name', '$mail', '$message')";
if($conn->quary($sql)==true)
{
    echo "new record adder";
}

else
{
    echo "Error";
}
$conn->close();

?>