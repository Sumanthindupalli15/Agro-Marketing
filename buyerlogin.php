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
$username=$_POST['username'];
$password=$_POST['password'];
$sql="select *from buyer ";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error:".mysqli_error($conn);
    exit;
}
$row = [];
$flag=0;

	if ($result->num_rows > 0)
	{
		// fetch all data from db into array
		$row = $result->fetch_all(MYSQLI_ASSOC);
	}
    if(!empty($row))
			foreach($row as $rows)
			{
    
            if($rows['username']==$username && $rows['password']==$password)
            {
                $flag=1;
                session_start();
                $_SESSION['name']=$rows['name'];
            echo "<script>location.replace('shop.html')</script>";
        
        }
       }
if($flag==0){
    echo"<script>alert('check your credentials')</script>";
    echo"<script>location.replace('buyerlogin.html')</script>";
}

mysqli_close($conn);
?>