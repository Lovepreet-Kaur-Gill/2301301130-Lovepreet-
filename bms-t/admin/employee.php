<?php 
include("../config/config.php");
if(isset($_SESSION['status'])&&$_SESSION['status']!=''){
    $message='<p>'.$Session['status'].'</p>';
    unset($_SESSION['status']);
}
?>
<h2>Employee<h2>
    <a href="employee-manage.php">Add New Employee</a>
<table border="1" style="width:90%">
<thead>
    <tr>
        <th>S.no.</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>

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