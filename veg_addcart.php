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

$c16='Carrot';
if(isset($_POST['Carrot'])){
$check16=$_POST['Carrot'];}
$farmer16=$_POST['f16'];
$qty16=$_POST['qty16'];
if(isset($check16)){
$sql16="insert into addcart(fruitname,farmername,name,quantity) values('$c16','$farmer16','$name','$qty16')";
$result16=mysqli_query($conn,$sql16);
$flag=1;
    }
    $c17='Beetroot';
if(isset($_POST['Beetroot'])){
$check17=$_POST['Beetroot'];}
$farmer17=$_POST['f17']; 
$qty17=$_POST['qty17'];
if(isset($check17)){
$sql17="insert into addcart(fruitname,farmername,name,quantity) values('$c17','$farmer17','$name','$qty17')";

$result17=mysqli_query($conn,$sql17);
$flag=1;
}
$c18='Corriander';
if(isset($_POST['Corriander'])){
$check18=$_POST['Corriander'];}
$farmer18=$_POST['f18']; 
$qty18=$_POST['qty18'];
if(isset($check18)){
$sql18="insert into addcart(fruitname,farmername,name,quantity) values('$c18','$farmer18','$name','$qty18')";
    $result18=mysqli_query($conn,$sql18);
    $flag=1;
       
}

$c19='Potato';
if(isset($_POST['Potato'])){
$check4=$_POST['Potato'];}
$farmer4=$_POST['f19']; 
$qty19=$_POST['qty19'];
if(isset($check19)){
    $sql19="insert into addcart(fruitname,farmername,quantity) values('$c19','$farmer19','$qty19')";
    $result19=mysqli_query($conn,$sql19);
    $flag=1;
}
$c20='Cucumber';
if(isset($_POST['Cucumber'])){
$check20=$_POST['Cucumber'];}
$farmer20=$_POST['f20']; 
$qty20=$_POST['qty20'];
if(isset($check20)){
    $sql20="insert into addcart(fruitname,farmername,name,quantity) values('$c20','$farmer20','$name','$qty20')";
    $result20=mysqli_query($conn,$sql20);
    $flag=1;
}
$c21='Brinjal';
if(isset($_POST['Brinjal'])){
$check21=$_POST['Brinjal'];}
$farmer21=$_POST['f21']; 
$qty21=$_POST['qty21'];
if(isset($check21)){
    $sql21="insert into addcart(fruitname,farmername,name,quantity) values('$c21','$farmer21','$name','$qty21')";
    $result21=mysqli_query($conn,$sql21);
    $flag=1;
}
$c22='Spinach';
if(isset($_POST['Spinach'])){
$check22=$_POST['Spinach'];}
$farme22=$_POST['f22']; 
$qty22=$_POST['qty22'];
if(isset($check22)){
    $sql22="insert into addcart(fruitname,farmername,name,quantity) values('$c22','$farmer22','$name','$qty222')";
    $result22=mysqli_query($conn,$sql22);
    $flag=1;
}
$c23='Tamoto';
if(isset($_POST['Tamoto'])){
$check23=$_POST['Tamoto'];}
$farmer23=$_POST['f23']; 
$qty23=$_POST['qty23'];
if(isset($check23)){
    $sql23="insert into addcart(fruitname,farmername,name,quantity) values('$c23','$farmer23','$name','$qty23')";
    $result23=mysqli_query($conn,$sql23);
    $flag=1;
}
$c24='Ladysfinger';
if(isset($_POST['Ladysfinger'])){
$check24=$_POST['Ladysfinger'];}
$farmer24=$_POST['f24']; 
$qty24=$_POST['qty24'];
if(isset($check9)){
    $sql24="insert into addcart(fruitname,farmername,name,quantity) values('$c24','$farmer24','$name','$qty24)";
    $result24=mysqli_query($conn,$sql24);
    $flag=1;
}
$c25='Drumstick';
if(isset($_POST['Drumstick'])){
$check25=$_POST['Drumstick'];}
$farmer25=$_POST['f25']; 
$qty25=$_POST['qty25'];
if(isset($check25)){
    $sql25="insert into addcart(fruitname,farmername,name,quantity) values('$c25','$farmer25','$name','$qty25')";
    $result25=mysqli_query($conn,$sql25);
    $flag=1;
}
if($flag==1)
{
    echo "<script>location.replace('placeorder.php')</script>";
}
else{
    echo"<script>alert('Select Vegetables')</script>";
    echo"<script>location.replace('vegetables.html')</script>";
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