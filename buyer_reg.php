<?php
$db_hostname="127.0.0.1";
$db_username="root";
$db_password="";
$db_name="register";
$conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$conn){
echo "connection failed".mysqli_connect_error();
exit;
}

    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $username=$_POST['username'];
    $password=$_POST['password']; 
    session_start();
    $_SESSION['name']=$name;
    

$sql="insert into buyer(name,contact,username, password) values('$name','$contact','$username','$password')";
if(mysqli_query($conn,$sql))
{
    echo "<script>location.replace('buyerlogin.html')</script>";
}
else{
    echo "error:".$sql."" .mysqli_error($conn);
}
mysqli_close($conn);
?>