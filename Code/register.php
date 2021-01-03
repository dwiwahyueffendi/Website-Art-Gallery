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
                    alert('User berhasil ditambahkan!');
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
    <title>Register | Pamer.in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/js/bootstrap.min.js"></script>
<body>
    <form action="" method="post">
        <label for="r_username">Username : </label><br>
        <input type="username" name="r_username" id="" placeholder="Pick a username" required><br>

        <label for="r_email">Email : </label><br>
        <input type="email" name="r_email" id="" placeholder="Add your email" required><br>

        <label for="r_password">Password : </label><br>
        <input type="password" name="r_password" id="" placeholder="Password" required><br>

        <label for="r_confirmPassword">Confirm Password : </label><br>
        <input type="password" name="r_confirmPassword" id="" placeholder="Confirm Password" required><br><br>

        <button type="submit" name="register">Register!</button>
    </form>
</body>
</html>
