<?php
    /*========================Prep===============================*/
    $id_post=$_REQUEST['postid'];
    //$id_post = 1;  //idpsot dari $_GET['id_post']

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

    $jumlah_comment = " SELECT 
                            COUNT(*) as jml_komen
                        FROM komentar
                        WHERE IDPOST = $id_post
                      ";
    
    $res_count = $conn->query($jumlah_comment);
    while($row_count = mysqli_fetch_array($res_count)){
        $jml_komen = $row_count['jml_komen'];
    }

    $query_kat ="   SELECT
                        NAMAKATEGORI
                    FROM kategori
                    WHERE IDKATEGORI = $kat
                ";
    $res_kat = $conn->query($query_kat);
    while($row_kat = mysqli_fetch_array($res_kat)){
        $nama_kat = $row_kat['NAMAKATEGORI'];
    }
    /*=======================Process==============================*/
?>


<!-- isi Focus -->
<div class="container">
    <!-- <p>The .img-responsive class makes the image scale nicely to the parent element 
        (resize the browser window to see the effect):</p> -->
    <div class="text-center padding-large">
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
                    <div class='row roboto'>
                        <div class='col-1 media-left'>
                            <img src='Image/icon/account.png' class='media-object' style='width:60px'>
                        </div>
                        <div class='col media-body'>
                            <h4 class='media-heading'>
                                ". $judul ."
                            </h4>
                            <p>By ". $artist ."</p>
                        </div>
                        <div class='col media-body right roboto'>
                            <h4 class='media-heading'> </h4>
                            <p>Published : ". $tgl_post ."</p>
                            <a href='#'><p>#". $nama_kat ."</p></a>
                        </div>
                    </div>
                    <div class='row roboto' style='padding-left:64px'>
                        <div class='col-2'>
                            <a href='#'>
                                <div class='row'>
                                    <div class='col-1 media-left'>
                                        <img src='Image/icon/like.png' class='media-object' style='width:15px'>
                                    </div>
                                    <div class='col media-body'>
                                        <p>like</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class='col-2'>
                            <div class='row'>
                                <div class='col-1 media-left'>
                                    <img src='Image/icon/chat.png' class='media-object' style='width:15px'>
                                </div>
                                <div class='col media-body'>
                                    <p>
                                    ". $jml_komen ."
                                    Comment</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='justify roboto padding-large' >
                        <p>
                            <b>Description : </b>
                        </p>
                        <p>
                            ". $deskripsi ."    
                            <!--
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Nunc pharetra enim sit amet pellentesque pretium. 
                            Etiam pharetra diam a metus congue ultrices. 
                            In vehicula dapibus pulvinar. 
                            Donec imperdiet odio at ullamcorper rhoncus. 
                            Curabitur pulvinar, magna eu tempus scelerisque, 
                            tellus tellus gravida risus, in facilisis quam augue id dui. 
                            Curabitur vel tempus ipsum. Curabitur mattis dapibus efficitur. 
                            Proin non odio ultricies, posuere elit vel, pellentesque libero. Maecenas in euismod arcu. 
                            Aliquam sollicitudin nibh vel lacinia placerat. Aliquam id porta lectus, et porttitor mi. 
                            Donec ultrices eros vel arcu tristique, venenatis tristique felis tempus. 
                            Etiam eget porttitor dui. Quisque eu magna orci. Praesent ultricies egestas cursus.
                            -->
                        </p>
                    <div>
            ");

            //insert Comment

            echo ("
                    <form class='padding-large' method='POST'>
                        <div class='form-group'>
                            <label class='roboto' for='i_komen'><b>Comment</b></label>
                            <textarea id='' name='i_komen' class='form-control' style='background-color: lightgrey!important;' rows='4' placeholder='Komentar Anda...'></textarea>
                        </div>
                        <br>
                        <div class='col right'>
                            <button type='submit' style='text-align:right' class='btn btn-primary fBaloo base-color' id='' name='post_it'>Post it!</button>
                        </div>
                        <br>
                    </form>
            ");

            //load comment
            require('sistem_load/load_komen.php');
        ?>
    </div>
</div>