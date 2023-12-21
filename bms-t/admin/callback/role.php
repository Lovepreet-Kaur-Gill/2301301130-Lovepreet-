<?php  
include('../../config/config.php');

//isset check karta h ki ye hamare array ke andar h ya nhi h and trim extra wide space ko hata deta h
if(isset($_POST['title']) && trim($_POST['title'])!=''){
$title = $_POST['title'];
$query = "insert into role(name,description) VALUES('$title','$description')";
$checkresult = $conn->query($query);
//echo 'here';
if($checkResult){
    $_SESSION['status']='success';
   header("location:../role.php");
   echo 'pass';
}
else{
    $_SESSION['status']='fail';
    header("location:../role.php");
    echo 'fail';
}
}
//update
//delete
?>
