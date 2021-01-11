<?php
    function upload($data,$file){
        //debugging
        // var_dump($data);
        // var_dump($file);  die;
        global $conn;
        //Username
        $username = $_SESSION['username'];
        //file
        $imgName = $file['i_file']['name'];
        //tmp file url
        $tmpDir = $file['i_file']['tmp_name'];
        //file_url destination 
        $fileDir= "Image/img/".$imgName."";
        //file size
        $imgSize = $file['i_file']['size'];
        //error information
        $imgErr = $file['i_file']['error'];

        //title
        $title = $data['i_title'];
        //deskripsi
        $deskripsi = $data['i_deskripsi'];
        //genre
        $genre = $data['i_genre'];
        //setting tanggal
        $date = date("Y-m-d");
        
        //check if file is uploaded
        if( $imgErr === 4){
            echo "<script>
                    alert('Pilih gambar yang ingin diupload terlebih dahulu!');
                  </script>";
            return false;
        }

        //check if extension is true
        $validExtension = ['jpg','jpeg','png'];
        //get file extensions
        $imgExtension = explode('.',$imgName);
        $imgExtension = strtolower(end($imgExtension));
        if(!in_array($imgExtension,$validExtension)){
            echo "<script>
                    alert('Input File dengan ekstensi jpg, jpeg, dan png!');
                </script>";
                return false;
        }

        //check the file size is below 15mb
        if($imgSize > 15000000){
            echo "<script>
                    alert('Ukuran File melebihi 15mb!');
                  </script>";
        }

        //prepare the query
        $query ="   INSERT INTO
                        post    (`GAMBAR`,`DESKRIPSI`,`TANGGALPOST`,`JUMLAHLIKE`,`IDKATEGORI`,`USERNAME`,`TITLE`)
                    VALUES      ('$fileDir','$deskripsi','$date',0,'$genre','$username','$title');
                ";

        //jika berhasil insert ke dalam query maka pindah file ke lokal direktori
        $conn->query($query);
        move_uploaded_file($tmpDir,$fileDir);
        return mysqli_affected_rows($conn); //Mengembalikan sebuah value 1 jika berhasil dan -1 jika tidak berhasil
    }
    if( isset($_POST['post_it']) )
    {
        if( upload($_POST,$_FILES) > 0 )
        {
            echo "<script>
                        alert('Sukses!');
                    </script>";
        }
        else
        {
              echo "<script>
                        alert('Galat Mengupload!');
                    </script>";
            echo mysqli_error($conn);
        }
    }
    
?>