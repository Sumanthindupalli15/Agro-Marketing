<html>
    <head></head>
    <body>
        <h1 align="center">Place your Order</h1>
    </body>
</html>
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
$sql="select *from addcart where name='$name'";
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
    $count=0;
    if(!empty($row))
			foreach($row as $rows)
			{
               echo "<b style='font-size:18px;'&nbsp&nbsp>  Product Name:</b>";
               echo "<b style='font-size:18px;margin-left:28px;'>" .$rows['fruitname']."</b><br>";
               echo "<b style='font-size:18px;'&nbsp&nbsp>  Farmer Name:</b>";
               echo "<b style='font-size:18px;margin-left:20px;'>".$rows['farmername']."</b><br><br>";
               
            }
            $_SESSION['farmername']=$rows['farmername'];             
              ?>
            <html>
                <head></head>
                <body>
                <form method="POST" action="placing.php">
                 <input type="textarea" name="address" placeholder="enter address">
                 <input type="text" name="contact" placeholder="enter contact number">
                 <input type="submit" name="submit" value="submit">
                </form>
                </body>
            </html>   
      
       

<?php
mysqli_close($conn);
?>