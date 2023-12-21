<?php 
include("../config/config.php");
if(isset($_SESSION['status'])&&$_SESSION['status']!=''){
    $message='<p>'.$Session['status'].'</p>';
    unset($_SESSION['status']);
}

if(isset($_SESSION['status']) && $_SESSION['status']!=''){
    $message ='<p>'.$_SESSION['status'].'</p>';
    unset($_SESSION['status']);
}
$roleHtml ='';
$query="select id,name from roll";//star means jitne bhi column uss table pe honge vo sabb hume lene h to star ka use hoga
$result =$conn->query($query);
print_r($result);
//if lagayenge hamesha query ke baad ye check karne ke liye ki include hua h ya nhi 
if($result->num_rows > 0){
    $finalresult = $result->fetch_assoc();
    while($row = $finalresult){
        $id=$row['id'];
       $roleHtml .='
       <tr>
        <td>'.$row['id'].'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['description'].'</td>
            <td><a href="role_manage.php?id'.$id.'">Edit</a> /<button>Delete</button></td>
        </tr>';
        //agar query string me id aa rahi h to vo add keliye warna edit ke liye
    }
    //echo $result->num_rows;
}

?>
<!--<div class="cont">
        <div class="line"></div>
        <div class="box">1</div>
        
            
            <div class="lines"></div>
        </div><br>
        <p style="text-align: center ;color:black;">Select Category</p>
        <div class="box2">
        <button class="buttons">New Product</button><br><br>
        <p class="product"><b>Product 1</b></p>

<div class="greyline">
    <div class="orange_line"></div>
</div><br>
<div class="checkbox">
<input type="checkbox" ></div>
<p class="copy">Copy input details to all the products</p>
<p class="copy">If you want to change specific fields for particular product like color,Name etc, you can change it by selecting that product.</p>
<div class="front_image">
<h3 class="he">Front Image</h3>  
    <div class="browse"><button class="files">Browse  Files</button></div></div>
<h3 class="images">Other Images</h3>
<div class="browse"><button class="files">Browse  Files</button></div><br><br><br><br><br><br><h5>SDF Price*</h5>
<input type="text" placeholder="product name">
<H5>Product Name*</H5>
<input type="text" placeholder="product name">
<h5>HSN Code*</h5>
<input type="text" placeholder="product name">

<br>
<br>
<br>
<br>
<br>
<br>-->

<!--echo '<pre>';
//print_r($_POST);
//print_r($_FILES);
-->
<h2>Category<h2>
    <a href="category_manage.php">Add New Role</a>
<table border="1" style="width:90%">
<thead>
    <tr>
        <th>S.no.</th>
        <th>Title</th>
        <th>Description</th>
        <th>Action</th>

    </tr>
</thead>
<tbody>
    <tr>
    <td>1.</td>
        <td>Admin</td>
        <td>This is Page</td>
        <td><button>Edit</button>/<button>Delete</button></td>
    </tr>
</tbody>
</table>
<?php  include('footer.php'); ?>

   
