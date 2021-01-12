<?php
    //Memulai session
    session_start();

    //Cek apakah user sudah login atau belum
    if(isset($_SESSION['login']))
    {
        header("Location: userArt.php");
        exit;
    }

    require 'proses-data.php';
    if( isset($_POST['register']) )
    {
        if( registrasi($_POST) > 0 )
        {
            echo "<script>
                    alert('Anda berhasil Mendaftar!');
                  </script>";
        }
        else
        {
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<head>
    <title>Register | ArtGallery</title>
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
               <h1 class="LogReg">Join</h1>
               <p class="question-LogReg">Already have an account?<a href="login.php" style="text-decoration: none; color: #FFF6C4"> Log in</a></p>

               <form action="" method="post" class="form-LogReg" style="margin-top: 30px;">
                    <div class="form-group">
                        <input type="username" name="r_username" class="form-control form-control-lg input-LogReg mb-3" placeholder="Pick a username">
                    </div>
                    <div class="form-group">
                        <input type="email" name="r_email" class="form-control form-control-lg input-LogReg mb-3" placeholder="Add your email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="r_password" class="form-control form-control-lg input-LogReg mb-3" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="password" name="r_confirmPassword" class="form-control form-control-lg input-LogReg mb-3" placeholder="Confirm Password">
                    </div>
                    <button type="submit" name="register" class="btn btn-primary button-LogReg">JOIN</button>
                </form>

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
