

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
                                <li class='nav-item active'>
                                    <a class='nav-link' href='edit.php'>Edit Profile</a>
                                </li>
                                <li class='nav-item'>
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
                        Edit Profile
                    </div>
                    <form action="" method="post">
                       <div class="row">
                           <div class="col-md-6">
                               <div class="form-group">
                                   <label for="name">Name</label>
                                   <input type="text" name="name" id="" class="form-control">
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-group">
                                    <label for="name">Upload your photo</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                               </div>
                                

                           </div>
                           <div class="col-md-6">
                                <div class="form-group">
                                   <label for="name">Twitter</label>
                                   <input type="text" name="twitter" id="" class="form-control">
                                </div>
                           </div>
                           <div class="col-md-6">
                                <div class="form-group">
                                   <label for="name">Facebook</label>
                                   <input type="text" name="facebook" id="" class="form-control">
                                </div>
                           </div>
                           <div class="col-md-6">
                                <div class="form-group">
                                   <label for="name">Google</label>
                                   <input type="text" name="google" id="" class="form-control">
                                </div>
                           </div>
                           <div class="col-md-6">
                                <div class="form-group">
                                   <label for="name">Feedburner</label>
                                   <input type="text" name="feed" id="" class="form-control">
                                </div>
                           </div>
                           <div class="col-md-6">
                                <div class="form-group">
                                   <label for="name">Mail</label>
                                   <input type="text" name="mail" id="" class="form-control">
                                </div>
                           </div>
                           <div class="col-md-6"></div>
                           <div class="col-md-6">
                                <div class="form-group">
                                   <label for="name">Website</label>
                                   <input type="text" name="site" id="" class="form-control" placeholer="Input your Website">
                                </div>
                           </div>
                           <div class="col-md-6"></div>
                           <div class="col-md-12">
                               <div class="form-group">
                                   <label for="profile">Profile</label>
                                   <textarea name="profile" id="" cols="30" rows="7" class="form-control"></textarea>
                               </div>
                           </div>                           
                           <div class="col-md-12">
                               <button class="btn btn-success">Update Profile</button>
                           </div>
                       </div>
                       
                    </form>                        
                                           
                
            </div>
        </div>
    </body>

    </html>