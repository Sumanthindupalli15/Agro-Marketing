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

$c1='Apple';
if(isset($_POST['Apple'])){
$check1=$_POST['Apple'];}
$farmer1=$_POST['f1'];
$qty1=$_POST['qty1'];
if(isset($check1)){
$sql1="insert into addcart(fruitname,farmername,name,quantity) values('$c1','$farmer1','$name','$qty1')";
$result1=mysqli_query($conn,$sql1);
$flag=1;
    }
    $c2='Grape';
if(isset($_POST['Grape'])){
$check2=$_POST['Grape'];}
$farmer2=$_POST['f2']; 
$qty2=$_POST['qty2'];
if(isset($check2)){
$sql2="insert into addcart(fruitname,farmername,name,quantity) values('$c2','$farmer2','$name','$qty2')";

$result2=mysqli_query($conn,$sql2);
$flag=1;
}
$c3='kiwi';
if(isset($_POST['kiwi'])){
$check3=$_POST['kiwi'];}
$farmer3=$_POST['f3'];
$qty3=$_POST['qty3'];
if(isset($check3)){ 
$sql3="insert into addcart(fruitname,farmername,name,quantity) values('$c3','$farmer3','$name','$qty3')";
    $result3=mysqli_query($conn,$sql3);
    $flag=1;
       
}

$c4='Banana';
if(isset($_POST['Banana'])){
$check4=$_POST['Banana'];}
$farmer4=$_POST['f4'];
$qty4=$_POST['qty4']; 
if(isset($check4)){
    $sql4="insert into addcart(fruitname,farmername,name,quantity) values('$c4','$farmer4','$name','$qty4')";
    $result4=mysqli_query($conn,$sql4);
    $flag=1;
}
$c5='Papaya';
if(isset($_POST['Papaya'])){
$check5=$_POST['Papaya'];}
$farmer5=$_POST['f5']; 
$qty5=$_POST['qty5'];
if(isset($check5)){
    $sql5="insert into addcart(fruitname,farmername,name,quantity) values('$c5','$farmer5','$qty5')";
    $result5=mysqli_query($conn,$sql5);
    $flag=1;
}
$c6='Mango';
if(isset($_POST['Mango'])){
$check6=$_POST['Mango'];}
$farmer6=$_POST['f6'];
$qty6=$_POST['qty6']; 
if(isset($check6)){
    $sql6="insert into addcart(fruitname,farmername,name,quantity) values('$c6','$farmer6','$name','$qty6')";
    $result6=mysqli_query($conn,$sql6);
    $flag=1;
}
$c7='Watermelon';
if(isset($_POST['Watermelon'])){
$check7=$_POST['Watermelon'];}
$farmer7=$_POST['f7']; 
$qty7=$_POST['qty7'];
if(isset($check7)){
    $sql7="insert into addcart(fruitname,farmername,name,quantity) values('$c7','$farmer7','$name','$qty7')";
    $result7=mysqli_query($conn,$sql7);
    $flag=1;
}
$c8='Orange';
if(isset($_POST['Orange'])){
$check8=$_POST['Orange'];}
$farmer8=$_POST['f8']; 
$qty8=$_POST['qty8'];
if(isset($check8)){
    $sql8="insert into addcart(fruitname,farmername,name,quantity) values('$c8','$farmer8','$name','$qty8')";
    $result8=mysqli_query($conn,$sql8);
    $flag=1;
}
$c9='Guava';
if(isset($_POST['Guava'])){
$check9=$_POST['Guava'];}
$farmer9=$_POST['f9']; 
$qty9=$_POST['qty9'];
if(isset($check9)){
    $sql9="insert into addcart(fruitname,farmername,name,quantity) values('$c9','$farmer9','$name','$qty9')";
    $result9=mysqli_query($conn,$sql9);
    $flag=1;
}
$c10='Muskmelon';
if(isset($_POST['Muskmelon'])){
$check10=$_POST['Muskmelon'];}
$farmer10=$_POST['f10']; 
$qty10=$_POST['qty10'];
if(isset($check10)){
    $sql10="insert into addcart(fruitname,farmername,name,quantity) values('$c10','$farmer10','$name','$qty10')";
    $result10=mysqli_query($conn,$sql10);
    $flag=1;
}
if($flag==1)
{
    echo "<script>location.replace('placeorder.php')</script>";
}
else{
    echo"<script>alert('Select fruits')</script>";
    echo"<script>location.replace('fru.html')</script>";
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