<?php
/*
This will create the file for that user
TODO:
File System
Login
*/
$usersName = $_POST['reg-username'];
$usersPassword = $_POST['reg-password'];
if(file_exists("Users/" . $usersName . ".txt")){
    echo "USERNAME TAKEN!";
    exit;
}
// Main
$fp = fopen("Users/" . $usersName . '.txt', "w");

// Write
fwrite($fp, $usersPassword);
fclose($fp)
?>
<script>
    window.location.href = "index.php"
</script>