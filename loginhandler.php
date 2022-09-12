<?php
include("login/login.php");
function loginhandler(){
if(!empty($username) || !empty($password) || !is_numeric($username)){
    //loggin
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
    $result = mysqli_query($con, $query);
    if ($result) {
        if ($result || mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            if ($user_data['password'] === $password) {
                $_SESSION['id'] = $user_data['id'];
                header("Location: ../main.php");
                die;
            }
        }
    }echo ("not valid info");

}
else
{
    echo ("not valid info");
}
}



?>