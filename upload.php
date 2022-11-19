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

    $farmername=$_POST['farmername'];
    $productname=$_POST['productname'];
    $phonenumber=$_POST['phonenumber'];
    $quantity=$_POST['quantity']; 

$sql="insert into upload(farmername,productname,phonenumber,quantity) values('$farmername','$productname','$phonenumber','$quantity')";
if(mysqli_query($conn,$sql))
{
    echo "<script>location.replace('farmerlog.html')</script>";
}
else{
    echo "error:".$sql."" .mysqli_error($conn);
}
mysqli_close($conn);
?>