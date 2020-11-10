<?php
$usersName = $_POST['login-username'];
$usersPassword = $_POST['login-password'];
if(file_exists("Users/" . $usersName . '.txt')){
    $txtValue = "Users/" . $usersName . '.txt';
    $compare = file_get_contents($txtValue);
    if($usersPassword == $compare){
        $echo_con = file_get_contents('main.php');
        echo "<h2 class=\"header\">Welcome " . $usersName . "!</h2>";
        echo $echo_con;
    }
    if($usersPassword != $compare){
        echo "Login wrong!";
    }
}
?>