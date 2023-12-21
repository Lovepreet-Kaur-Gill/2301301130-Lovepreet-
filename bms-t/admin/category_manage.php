<?php  
include("../config/config.php");

if($conn->connect_error){
   echo'failed';
}
else{
   echo'pass';
}

$description ='';
$title = '';
if(isset($_GET['id']) && $_GET['id']>0){
    //edit
    $result =$conn->query("select * from role where id=".$_GET['id']);
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        print_r($row);
        $title=$row['name'];
        $description=$row['description'];
    }
}

?>


<h2>Category Manage<h2>
<a href="role_manage.php">Add New Category</a>
<form method="Post" action="category.php" enctype="multipart/form-data"><!--multimedia content dollar underscore files me milta h-->
<input type="text" name="title">
<input type="password" name="description">
<input type="submit">
</form>
<?php  include('footer.php'); ?>