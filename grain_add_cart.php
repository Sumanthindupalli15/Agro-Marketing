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

$c31='Bengalgram';
if(isset($_POST['Bengalgram'])){
$check1=$_POST['Bengalgram'];
$farmer31=$_POST['f31'];
$qty31=$_POST['qty31'];
$sql31="insert into addcart(fruitname,farmername,name,quantity) values('$c31','$farmer31','$name','$qty31')";
$result31=mysqli_query($conn,$sql31);
$flag=1;
    }
    $c32='Grreengram';
if(isset($_POST['Grreengram'])){
$check32=$_POST['Grreengram'];
$farmer32=$_POST['f32']; 
$qty32=$_POST['qty32'];
$sql32="insert into addcart(fruitname,farmername,name,quantity) values('$c32','$farmer32','$name','$qty32')";

$result32=mysqli_query($conn,$sql32);
$flag=1;
}
$c33='Groundnut';
if(isset($_POST['Groundnut'])){
$check33=$_POST['Groundnut'];
$farmer33=$_POST['f33']; 
$qty33=$_POST['qty33'];
$sql33="insert into addcart(fruitname,farmername,name,quantity) values('$c33','$farmer33','$name','$qty33')";
    $result33=mysqli_query($conn,$sql33);
    $flag=1;
       
}

$c34='Ragi';
if(isset($_POST['Ragi'])){
$check34=$_POST['Ragi'];
$farmer34=$_POST['f34']; 
$qty34=$_POST['qty34'];
    $sql34="insert into addcart(fruitname,farmername,name,quantity) values('$c34','$farmer34','$name','$qty34')";
    $result34=mysqli_query($conn,$sql34);
    $flag=1;
}

$c35='Redbean';
if(isset($_POST['Redbean'])){
$check35=$_POST['Redbean'];
$farmer35=$_POST['f35']; 
$qty35=$_POST['qty35'];
    $sql35="insert into addcart(fruitname,farmername,name,quantity) values('$c35','$farmer35','$name','$qty35')";
    $result35=mysqli_query($conn,$sql35);
    $flag=1;
}

$c36='Redgram';
if(isset($_POST['Redgram'])){
$check36=$_POST['Redgram'];
$farmer36=$_POST['f36']; 
$qty36=$_POST['qty36'];
    $sql36="insert into addcart(fruitname,farmername,name,quantity) values('$c36','$farmer36','$name','$qty36')";
    $result36=mysqli_query($conn,$sql36);
    $flag=1;
}

$c37='Soya';
if(isset($_POST['Soya'])){
$check37=$_POST['Soya'];
$farmer37=$_POST['f37']; 
$qty37=$_POST['qty37'];
    $sql37="insert into addcart(fruitname,farmername,name,quantity) values('$c37','$farmer37','$name','$qty37')";
    $result37=mysqli_query($conn,$sql34);
    $flag=1;
}

$c38='Wheat';
if(isset($_POST['Wheat'])){
$check38=$_POST['Wheat'];
$farmer38=$_POST['f38']; 
$qty38=$_POST['qty38'];
    $sql38="insert into addcart(fruitname,farmername,name,quantity) values('$c38','$farmer38','$name','$qty38')";
    $result38=mysqli_query($conn,$sql38);
    $flag=1;
}

$c39='Paddy';
if(isset($_POST['Paddy'])){
$check39=$_POST['Paddy'];
$farmer39=$_POST['f39']; 
$qty39=$_POST['qty39'];
    $sql39="insert into addcart(fruitname,farmername,name,quantity) values('$c39,'$farmer39','$name','$qty39')";
    $result39=mysqli_query($conn,$sql39);
    $flag=1;
}

$c40='Redlentill';
if(isset($_POST['Redlentill'])){
$check40=$_POST['Redlentill'];
$farmer40=$_POST['f40']; 
$qty40=$_POST['qty40'];
    $sql40="insert into addcart(fruitname,farmername,name,quantity) values('$c40,'$farmer40','$name','$qty40')";
    $result40=mysqli_query($conn,$sql40);
    $flag=1;
}
if($flag==1)
{
    echo "<script>location.replace('placeorder.php')</script>";
}
else{
    echo"<script>alert('Select grains')</script>";
    echo"<script>location.replace('grains.html')</script>";
}



/*if($flag1==1){
$sql1="insert into addcart(fruitname,farmername) values('$c1','$farmer1')";
$result1=mysqli_query($conn,$sql1);}
if($flag2==1){
$sql2="insert into addcart(fruitname,farmername) values('$c2','$farmer2')";

$result2=mysqli_query($conn,$sql2);}

if($flag3==1){
    $sql3="insert into addcart(fruitname,farmername) values('$c3','$farmer3')";
    $result3=mysqli_query($conn,$sql3);}
    /*if($flag4==1){
        $sql4="insert into addcart(fruitname,farmername) values('$c4','$farmer4')";
        $result4=mysqli_query($conn,$sql4);}
        if($flag5==1){
            $sql5="insert into addcart(fruitname,farmername) values('$c5','$farmer5')";
            $result5=mysqli_query($conn,$sql5);}
     if($flag6==1){
             $sql6="insert into addcart(fruitname,farmername) values('$c6','$farmer6')";
            $result6=mysqli_query($conn,$sql6);}
    if($flag7==1){
                 $sql8="insert into addcart(fruitname,farmername) values('$c7','$farmer7')";
                $result8=mysqli_query($conn,$sql7);}
    if($flag8==1){
                 $sql8="insert into addcart(fruitname,farmername) values('$c8','$farmer8')";
                $result8=mysqli_query($conn,$sql8);}
    if($flag9==1){
            $sql9="insert into addcart(fruitname,farmername) values('$c9','$farmer9')";
            $result9=mysqli_query($conn,$sql9);}
        if($flag10==1){
              $sql10="insert into addcart(fruitname,farmername) values('$c10','$farmer10')";
         $result10=mysqli_query($conn,$sql10);}*/
mysqli_close($conn);
        
?>