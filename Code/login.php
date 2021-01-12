<?php
    //Memulai session
    session_start();

    //Cek apakah user sudah login atau belum
    if(isset($_SESSION['login']))
    {
        header("Location: userArt.php");
        exit;
    }

    include "proses-data.php";
    if(isset($_POST['login']))
    {
        $username = $_POST['l_username'];
        $password = $_POST['l_password'];

        $result = mysqli_query($conn, "SELECT * FROM akun WHERE username='$username'");

        //Cek username dari database
        if(mysqli_num_rows($result) === 1)
        {
            //Cek kecocokan password
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["PASSWORD"]))
            {
                //Set session login menjadi true
                $_SESSION['username'] = $username;
                $_SESSION['login'] = true;

                //Melempar user ke halaman lain
                header("Location: userArt.php");
                exit;
            }
        }

        $error = true;
    }
?>

<!DOCTYPE html>
<head>
    <title>Login | ArtGallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/r-style.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/js/bootstrap.min.js"></script>
<body style="background-color: #194E4A;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 image-LogReg">
               <h1 class="namaWebsite">ART GALLERY</h1>
               <h2 class="sloganWebsite">
                    Join<br>
                    Largest<br>
                    Art<br>
                    Community<br>
                    In The World<br>
               </h2>
               <p class="quoteWebsite">
                    Explore and discover art, become a better artist,<br>
                    connect with others over mutual hobbies, or<br>
                    buy and sell work – you can do it all here.<br>
                </p>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 side-LogReg">
               <h1 class="LogReg">Log in</h1>
               <p class="question-LogReg">Do you have an account?<a href="register.php" style="text-decoration: none; color: #FFF6C4"> Join</a></p>

               <form action="" class="form-LogReg" method="post">
                    <div class="form-group">
                        <input type="username" name="l_username" class="form-control form-control-lg input-LogReg mb-3" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="l_password" class="form-control form-control-lg input-LogReg mb-3" placeholder="Password" required>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary button-LogReg">LOG IN</button>
                </form>

                <?php if(isset($error)) : ?>
                    <div class="alert alert-danger mt-3" role="alert" style="border-radius: 0px;">
                        <p style="color:red"><b>Username / Password salah!</b></p>
                    </div>
                 <?php endif;?>

                <p class="agreement-LogReg">
                    By clicking Log In, I confirm that I have read and agree<br>
                    to the ArtGallery Terms of Service, Privacy Policy, and<br>
                    to receive emails and updates.<br>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
