<?php
session_start();
$name=$_SESSION['name'];
$db_hostname="127.0.0.1";
$db_username="root";
$db_password="";
$db_name="register";
$conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$conn){
echo "connection failed".mysqli_connect_error();
exit;
}


    $contact=$_POST['contact'];
    $address=$_POST['address'];
 
$sql="insert into contact(name,contact,address) values('$name','$contact','$address')  ";
if(mysqli_query($conn,$sql))
{
    echo "<b style='margin-left:400px;font-size:50px;'> order placed successfully</b>";
}
else{
    echo "error:".$sql."" .mysqli_error($conn);
}
mysqli_close($conn);
?>