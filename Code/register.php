<?php
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
        <input type="username" name="r_username" id="" placeholder="Pick a username"><br>

        <label for="r_email">Email : </label><br>
        <input type="email" name="r_email" id="" placeholder="Add your email"><br>

        <label for="r_password">Password : </label><br>
        <input type="password" name="r_password" id="" placeholder="Password"><br>

        <label for="r_confirmPassword">Confirm Password : </label><br>
        <input type="password" name="r_confirmPassword" id="" placeholder="Confirm Password"><br><br>

        <button type="submit" name="register">Register!</button>
    </form>
</body>
</html>