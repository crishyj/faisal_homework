

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Profile</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- <link rel="stylesheet" href="../static/style.css"> -->
        <link rel="stylesheet" href="fontawesome/css/all.min.css">
        <link rel="stylesheet" href="main.css">
    </head>

    <body>
        <ul class="nav">
            <li><a href="../blogs/blogs2.php">Blogs</a></li>
            <li><a href="../createPost/createPost.htm">Make a Post</a></li>
            <li><a href="../register/register.htm">Register</a></li>
            <li><a href="../signin/signin.htm">Sign In</a></li>
        </ul>
    <?php
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "403";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM profile WHERE id=1";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {                        
            while($row = $result->fetch_assoc()) {                            
                echo "   
                    <div class='profile'>
                        <div class='left_side'>
                            <div class='profile_img'>
                                <img src='".$row["image"]."' alt=''>
                            </div>
                            <ul class='nav flex-column'>
                                <li class='nav-item active'>
                                    <a class='nav-link' href='index.php'>Overview</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' href='edit.php'>Edit Profile</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' href='change_password.php'>Change Password</a>
                                </li>
                                
                            </ul>
                        </div>
                
                        <div class='profile_page'>
                                 
                            <div class='profile_title'>
                                About ".$row["name"]."
                            </div>
                            <div class='row'>
                                <div class='col-md-6'>
                                    <div class='social'>
                                        <div class='profile_title1'>
                                            Social Follow
                                        </div>
                                        <ul>
                                            <li>
                                                <a href=''> <span class='twitter'><i class='fab fa-twitter'></i></span>".$row["twitter"]."</a>
                                            </li>
                                            <li>
                                                <a href=''> <span class='facebook'><i class='fab fa-facebook-square'></i></span>".$row["facebook"]."</a>
                                            </li>
                                            <li>
                                                <a href=''> <span class='google'><i class='fab fa-google-plus-g'></i></span>".$row["google"]."</a>
                                            </li>
                                            <li>
                                                <a href=''> <span class='feed'><i class='fas fa-rss'></i></span>".$row["feed"]."</a>
                                            </li>
                                            <li>
                                                <a href=''> <span class='mail'><i class='far fa-envelope'></i></span>".$row["mail"]."</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='profile_img1'>
                                        <img src='".$row["image"]."' alt=''>
                                    </div>
                                </div>
                            </div>                          
                            
                            
                            <div class='profile_title1'>
                                Website
                            </div>
                            <div class='profile'>
                                ".$row["site"]."
                            </div>
                            
                            <div class='profile_title1'>
                                Profile
                            </div>
                            <div class='profile'>
                                ".$row["profile"]."
                            </div>

                            <div class='profile_title'>
                                Posts by  ".$row["name"]."
                            </div>
                            <ul>
                                <li>
                                    ".$row["post1"]."
                                </li>
                                <li>
                                    ".$row["post2"]."
                                </li>
                                <li>
                                    ".$row["post3"]."
                                </li>
                            </ul>   
                            </div>                            
                        ";
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>
            </div>
        </div>
    </body>

    </html>