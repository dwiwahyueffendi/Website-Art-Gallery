<?php
    /*========================Prep===============================*/
    $id_post=$_REQUEST['postid'];
    //$id_post = 1;  //idpsot dari $_GET['id_post']
    require('insertComment.php');
    require('updateComment.php');
    require('deleteComment.php');
    require('updateLike.php');
    // require('conn.php'); //opening connection
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
                            src='". $link_gambar ."'
                            alt='". $judul ."' 
                            style='max-height:504px;max-width:1008px'
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
                            <img src='Image/icon/accountblack.png' class='media-object' style='width:60px'>
                        </div>
                        <div class='col media-body'>
                            <h4 class='media-heading'>
                                ". $judul ."
                            </h4>
                                <p>By 
                                    <a style='color:black !important' href = 'userArt.php?username=". $artist ."'>
                                        ". $artist ."
                                    </a>
                                </p>
                        </div>
                        <div class='col media-body right roboto'>
                            <h4 class='media-heading'> </h4>
                            <p>Published : ". $tgl_post ."</p>
                            <a href='#'><p>#". $nama_kat ."</p></a>
                        </div>
                    </div>
                    <div class='row roboto' style='padding-left:64px'>
                        <div id='like' style='color:black;' class='col-2'>
                            <form method='POST'>
                                <button type='submit' style='background-color:transparent !important; border-color: transparent !important;font-size:12px;' class='btn' id='like_it' name='like_it'>
                                    <div class='row'>
                                        <div class='col-1 media-left'>
                                            <img src='Image/icon/like.png' class='media-object' style='width:15px'>
                                        </div>
                                        <input type='hidden' value=". $like ." name='like'>
                                        <div class='col media-body'>
                                            <p>". $like ." like</p>
                                        </div>
                                    </div>
                                </button>
                            </form>
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
                        </p>
                    <div>
            ");

            //insert Comment

            echo ("
                    <form class='padding-large' method='POST'>
                        <div class='form-group'>
                            <label class='roboto' for='i_komen'><b>Comment</b></label>
                            <textarea id='comment_area' name='i_komen' class='form-control' style='background-color: lightgrey!important;' rows='4' placeholder='Insert Comment Here....'></textarea>
                        </div>
                        <br>
                        <div class='col right'>
                            <span id='process_insert' style='display:none'>Processing...</span>
                            <button type='submit' style='text-align:right' class='btn btn-primary fBaloo base-color' id='comment_it' name='comment_it'>Post it!</button>
                        </div>
                        <br>
                    </form>
            ");
        ?>
        <div id="load_comment">
        <?php
            include('load_komen.php')
        ?>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#comment_it").on("click",function(){
      if($("#comment_area").val()!=""){
        $("#comment_it").html("Posting");
        var id_post= <?php echo ($id_post) ?>;
        $.ajax({
            type: "POST",
            url: "sistem_load/load_komen.php?postid=" + id_post,
            success: function(msg){
                $("#comment_it").html("Post It");
                $("#comment_area").val()="";
                $("#load_comment").html(msg);
            },
        });
      }else{
        $("#process").hide();
      }
    });
</script>