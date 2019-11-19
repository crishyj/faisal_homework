<?php 
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="..\static\style.css">
    <title>Blogs posts</title>
</head>

<body>
    <div class="container">

        <h1 style="text-align: center;">Blog Posts</h1>
        <br>
        
            <?php 
            $host = "localhost";
            $dbUsername = "root";
            $dbPassword = "";
            $dbName = "Blog_Websitedb";
            $connection = new mysqli($host, $dbUsername, $dbPassword, $dbName);
            $sql = "SELECT  title, post, images from posts";
            $view = mysqli_query($connection, $sql);
            while ($row = mysqli_fetch_array($view)){
                $supPost = $row['post'];
                echo '<a id="a" href="post/post.php?title='.$row['title'].'"> <h2>' .$row['title']."</h2> </a> ". "<p>". substr($supPost, 0) . '</p> <br /> <img width="100px" src="images/'.$row['images'].'"> '. "<br />";
            }
            ?>

    </div>
</body>

</html>