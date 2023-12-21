<?php include("../config/config.php");

if($conn->connect_error){
   echo'failed';
}
else{
   echo'pass';
}
?>
<h2>Employee Manage<h2>
<a href="role_manage.php">Add New Employee</a>
<form method="Post" action="category.php" enctype="multipart/form-data"><!--multimedia content dollar underscore files me milta h-->
<input type="text" name="title">
<input type="email" name="email">
<input type="password" name="description">
<input type="submit">
</form>
