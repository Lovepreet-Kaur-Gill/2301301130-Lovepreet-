<?php include('header.php');?>
<h2>Login</h2>
<form method="Post" action="category.php" enctype="multipart/form-data"><!--multimedia content dollar underscore files me milta h-->
  <input type="text" name="username">
  <input type="password" name="password">
  <input type="file" name="profileimage">
  <input type="submit">
</form>
<?php include("footer.php"); ?>
