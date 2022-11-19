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
$sql="select *from addcart where farmername='$name'";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error:".mysqli_error($conn);
    exit;
}
$row = [];
$row1=[];
$flag=0;

	if ($result->num_rows > 0)
	{
		// fetch all data from db into array
		$row = $result->fetch_all(MYSQLI_ASSOC);
    }
   
    ?>
   <!DOCTYPE html>
<html>
<style>
	td,th {
		border: 2px solid black;
		padding: 10px;
		margin: 5px;
		text-align: center;
	}
</style>

<body style="position:fixed">
	<table >
		<thead>
			<tr>
				<th>name</th>
				<th>productname</th>
                <th>farmername</th>
				<th>quantity</th>
				<th>contact</th>
				<th>address</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if(!empty($row))
			foreach($row as $rows)
			{
			?>
			<tr>

				<td><?php echo $rows['name']; ?></td>
				<td><?php echo $rows['fruitname']; ?></td>
                <td><?php echo $rows['farmername']; ?></td>
				<td><?php echo $rows['quantity']; ?></td>
		       <?php $name1=$rows['name'] ;
			  // echo $name1;
			  $sql1="select * from contact where name='$name1'";
	$result1=mysqli_query($conn,$sql1);
    if(!$result){
    echo "Error:".mysqli_error($conn);
    exit;
    }
	if ($result1->num_rows > 0)
	{
		// fetch all data from db into array
		$row1 = $result1->fetch_all(MYSQLI_ASSOC);
    }
			   ?>
                <?php
			if(!empty($row1))
			foreach($row1 as $rows1)
			{?>
				<td><?php echo $rows1['contact']; ?></td>
                <td><?php echo $rows1['address']; ?></td>
			<?php }?>	
			</tr>
			<?php } ?>
		</tbody>
	</table><br>
	<a style=" font-weight: bold;
       border-radius: 5px;
       background-color:black;
       color:white;
       margin-left:110px;
       padding:10px;
       width:80px;
	   text-decoration:none;" href="first.html">Go Back To Home</a>
	   	
</body>
</html>
<?php
mysqli_close($conn);
?>