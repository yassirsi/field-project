<?php
$user_name = $_POST['user_name'];
$password = $_POST['password'];

$con = new mysqli("localhost","root","","online_pharmacy");
if($con->connect_error){
    die("fail: ");

}
else{
    $stmt = $con->prepare("select * from login where user_name=?");
    $stmt->bind_param("s", $);
    $stmt->execute();
    $stmt_result =  $stmt->get_result();
    if($stmt_result->num_rows > 0){

    }else{
        echo"invalid";
    }
}
?>