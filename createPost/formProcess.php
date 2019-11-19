<?php
$target = "../blogs/images/".basename($_FILES['image']['name']);

$image = $_FILES['image']['name'];

$post = $_POST['post'];
$title = $_POST['title'];
$date = date("Y/m/d");
$username = "Mohammed";
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "Blog_Websitedb";
$connection = new mysqli($host, $dbUsername, $dbPassword, $dbName);
if(mysqli_connect_error()){
    die('Connection error');
} else{
    $insert = "INSERT Into posts (username, post, images, title, date) values ('$username', '$post', '$image'
    , '$title', '$date')";
    // $stmnt = $connection->prepare($insert);
    // $stmnt->bind_param("sss", $username, $post, $image);
    // $stmnt->execute();
    mysqli_query($connection, $insert);
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        echo "Your Post Is Alive";
    } else {
        echo "Some Problem Occured";
    }
}
?>
