<?php
include 'config.php';
if(isset($_GET['deleteid'])){
$id=$_GET['deleteid']; 
$sql="delete from register_user where id=$id";
$result=mysqli_query($conn, $sql);
if($result){
    // echo "Deleted Sucessfully";
    header('location:admin-manage-user.php');
}
else{
    die(mysqli_erro($conn));
}
}




?>