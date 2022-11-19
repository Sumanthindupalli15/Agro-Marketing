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
$sql="select *from admin";
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
                 break;
            }
           }
   /* if($flag==0){
        echo"<script>alert('check your credentials')</script>";
        echo"<script>location.replace('alogin.html')</script>";
    }*/
    if($flag==1)
    {
        $username=$rows['username'];
                $sql1="select *from addcart";
            $result1=mysqli_query($conn,$sql1);
            if(!$result1){
             echo "Error:".mysqli_error($conn);
             exit;
             }
             $row1 = [];

	      if ($result1->num_rows > 0)
	    {
		// fetch all data from db into array
		$row1 = $result1->fetch_all(MYSQLI_ASSOC);
	   } 
    }
    ?>
   <!DOCTYPE html>
   <html>
   <style>
	td,th {
		border: 1px solid black;
		padding: 10px;
		margin: 5px;
		text-align: center;
	}
    </style>

    <body style="position:absolute">
            
	<table >
		<thead>
			<tr>
               <th>name</th>
               <th>fruitname</th>
				<th>farmername</th>
				<th>quantity</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if(!empty($row1))
			foreach($row1 as $rows1)
			{
			?>
			<tr>

                <td><?php echo $rows1['name']; ?></td>
                <td><?php echo $rows1['fruitname']; ?></td>
				<td><?php echo $rows1['farmername']; ?></td>
				<td><?php echo $rows1['quantity']; ?></td>
				
			</tr>
			<?php } ?>
		</tbody>
	</table><br>
	
</body>
</html>
<?php

mysqli_close($conn);
?>