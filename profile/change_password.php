

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
                                <li class='nav-item'>
                                    <a class='nav-link' href='index.php'>Overview</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' href='edit.php'>Edit Profile</a>
                                </li>
                                <li class='nav-item active'>
                                    <a class='nav-link' href='change_password.php'>Change Password</a>
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
                <div class='profile_page'>                               
                    <div class='profile_title'>
                        Change Password
                    </div>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="new_pass">New Password</label>
                            <input type="text" class="form-control" placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <label for="confirm_pass">Confirm Password</label>
                            <input type="text" class="form-control" placeholder="Confirm Password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>                        
                                           
                
            </div>
        </div>
    </body>

    </html>