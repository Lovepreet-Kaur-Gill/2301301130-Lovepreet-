<?php 
include("../config/config.php");


if(isset($_SESSION['status']) && $_SESSION['status']!=''){
    $message ='<p>'.$_SESSION['status'].'</p>';
    unset($_SESSION['status']);
}
$roleHtml ='';
//query="select id,name from role";//star means jitne bhi column uss table pe honge vo sabb hume lene h to star ka use hoga
$result =$conn->query("select * from role");
//print_r($result);
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
//query string se data lene ke liye $_gET ka use hota h
?>
<h2>Role<h2>
    <a href="role_manage.php">Add New Role</a>
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
     <?php echo $roleHtml ; ?>
</tbody>
</table>
<?php  ?>