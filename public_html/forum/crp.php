<?php
$contents = $_POST['post-contents'];
$title = $_POST['post-title'];


if(file_exists("Posts/" . $title)) {
    $title = $title . rand(0,1000);
}
mkdir("Posts/" . $title);
mkdir("Posts/" . $title . "/comments");
$post = fopen("Posts/" . $title . "/" . $title . ".txt", "w");
fwrite($post, $contents);

header("Location: " . "https://creaoor99soc.000webhostapp.com/forum/Posts/");
echo "Succesfully Created Post, API";

?>
