<?php
    /*========================Prep===============================*/
    $id_post = 1;  //idpsot dari SESSION

    require('conn.php'); //opening connection
    $prep_query = " SELECT 
                        * 
                    FROM post 
                    WHERE IDPOST=$id_post
                ";
    $result = $conn->query($prep_query);
    while($row_focus = mysqli_fetch_array($result)){
        $judul = $row_focus['TITLE'];
        $link_gambar = $row_focus['GAMBAR'];
        $artist = $row_focus['USERNAME'];
        $deskripsi = $row_focus['DESKRIPSI'];
        $tgl_post = $row_focus['TANGGALPOST'];
        $like = $row_focus['JUMLAHLIKE'];
        $kat = $row_focus['IDKATEGORI'];
    }
    $conn->close();

    /*=======================Process==============================*/
?>


<!-- isi Focus -->
<div class="container">
    <!-- <p>The .img-responsive class makes the image scale nicely to the parent element 
        (resize the browser window to see the effect):</p> -->
    <div class="text-center">
        <?php
            echo("
                <a href='$link_gambar' target='_self' class='litebox' data-litebox-group='group-1'>
                        <img    class='img-responsive' 
                            src=" 
                                    . $link_gambar .        
                                " 
                            alt='". $judul ."' 
                            max-height='504px'
                        >
                </a>
            ");
        ?>
    </div>
    <div>
        <?php
            echo("
                    <div class='col'>
                        <div class='row'>
                            <img src='Image/icon/account.png' class='' style='width:60px'>
                        </div>
                        <div class='row'>
                            <h4 class='media-heading'>Left-aligned</h4>
                            <p>Lorem ipsum dolor sit amet, .</p>
                        </div>
                    </div>
                    <hr>
                    // <div class='
                    //     <div class='media-left'>
                    //         <img src='Image/icon/account.png' class='media-object' style='width:60px'>
                    //     </div>
                    //     <div class='media-body'>
                    //         <h4 class='media-heading'>
                    //             ". $judul ."
                    //         </h4>
                    //         <p>". $artist ."</p>
                    //     </div>
                    // </div>
                    // <h1 class='padding-large baloo' style='font-size:30px'></h1>
            ");
        ?>
        
    </div>
</div>