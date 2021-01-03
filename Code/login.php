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
                $_SESSION['login'] = true;

                //Melempar user ke halaman lain
                header("Location: index.php");
                exit;
            }
        }

        $error = true;
    }
?>

<!DOCTYPE html>
<head>
    <title>Login | Pamer.in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/js/bootstrap.min.js"></script>
<body>
    <?php if(isset($error)) : ?>
        <p style="color:red"><b>Username / Password salah!</b></p>
    <?php endif;?>
    <form action="" method="post">
        <label for="l_username">Username : </label><br>
        <input type="username" name="l_username" id="" placeholder="Pick a username" required><br>

        <label for="l_password">Password : </label><br>
        <input type="password" name="l_password" id="" placeholder="Password" required><br>

        <button type="submit" name="login">Login!</button>
    </form>
</body>
</html>
