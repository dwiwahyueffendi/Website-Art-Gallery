<?php
    include "conn.php";

    function registrasi($data)
    {
        global $conn;
        $username = strtolower($data['r_username']);
        $email = $data['r_email'];
        $password = mysqli_real_escape_string($conn, $data['r_password']);
        $cpassword = mysqli_real_escape_string($conn, $data['r_confirmPassword']);

        //Cek sesuai atau tidak sesuai antara password dan konfirmasi password
        if( $password !== $cpassword )
        {
            echo "<script>
                    alert('Password dan Konfirmasi Password tidak sesuai!');
                  </script>";
            
            return false;
        }

        //Enkripsi Password
        $password = password_hash($password, PASSWORD_DEFAULT);

        //Query insert akun baru ke database
        mysqli_query($conn, "INSERT INTO akun VALUES('$username', '$email', '$password')");
        return mysqli_affected_rows($conn); //Mengembalikan sebuah value 1 jika berhasil dan -1 jika tidak berhasil
    }
?>