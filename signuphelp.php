






<?php
$connection=mysqli_connect('localhost' , 'root');

if($connection)
{
    echo"Connection is established";
}
 else{
     echo " ERROR Connection Failed!"; 
 }
mysqli_select_db($connection,'login');

 
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password']; 

$data="INSERT INTO user (name ,email,password) VALUES ('$name', '$email', '$pass')";
  
mysqli_query ($connection, $data);
header('location:INDEX.html');

?>



