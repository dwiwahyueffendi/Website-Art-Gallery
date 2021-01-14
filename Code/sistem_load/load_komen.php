<?php
    $id_post=$_REQUEST['postid'];
    require('db_connect.php');
    $komen_query =" SELECT
                        *
                    FROM komentar
                    WHERE IDPOST = $id_post
                    ORDER BY TANGGALKOMENTAR
    ";

    $res_komen = $conn->query($komen_query);
    while($row_komen = mysqli_fetch_array($res_komen)){
        echo ("
            <div class='roboto padding'>
                <div class='row'>
                    <div class='col-1 media-left'>
                        <img src='Image/icon/accountblack.png' class='media-object' style='width:36px'>
                    </div>
                    <div class='col media-body'>
                        <div class='row'>
                            <a style='color:black !important; margin-left:-20px;' href = 'userArt.php?username=". $row_komen['USERNAME'] ."'>
                                <h6 class='col-2 media-heading'>
                                    <b>". $row_komen['USERNAME'] ."</b>
                                </h6>
                            </a>
                            <div class='col-1 media-body'>
                                <p style='font-size:12px; margin-left:-20px;'>  ". $row_komen['TANGGALKOMENTAR'] ."</p>
                            </div>  
                        </div>
                        <div class='media-body justify'>
                            <form id='e_form". $row_komen['IDKOMENTAR'] ."' style='display:none;' method='POST'>
                                <textarea id='e_area". $row_komen['IDKOMENTAR'] ."' name='e_komen' class='form-control'  rows='4' style='margin-left:-20px;'placeholder='". $row_komen['ISIKOMENTAR'] ."'></textarea>
                                <input type='hidden' value=". $row_komen['IDKOMENTAR'] ." name='id_comment'>
                                <br>
                                <div class='right'>
                                    <button type='submit' class='btn btn-primary fBaloo base-color' id='edit_it". $row_komen['IDKOMENTAR'] ."' name='edit_it' >Edit it!</button>
                                </div>
                            </form>
                            <p id='par_komen". $row_komen['IDKOMENTAR'] ."' style='margin-left:-20px'>". $row_komen['ISIKOMENTAR'] ."</p> 
                            <div class='row'>
                                <div class='col-2' >
                                    <button type='submit' class='btn btn-primary fBaloo base-color' id='open_edit". $row_komen['IDKOMENTAR'] ."' name='edit_it' style='margin-left:-20px'>Edit</button>
                                </div>
                                <form class='col-1' method='POST'>
                                    <input type='hidden' value=". $row_komen['IDKOMENTAR'] ." name='id_comment'>
                                    <button type='submit' class='btn btn-primary fBaloo base-color' id='delete_it". $row_komen['IDKOMENTAR'] ."' name='delete_it'>Delete</button>
                                </form>
                            </div>

                            <!--script-->
                            <script type='text/javascript'>
                                //edit ajax
                                $('#open_edit". $row_komen['IDKOMENTAR'] ."').on('click',function(){
                                if($('#e_form". $row_komen['IDKOMENTAR'] ."').css('display') == 'none'){
                                    $('#open_edit". $row_komen['IDKOMENTAR'] ."').html('Close Edit');
                                    $('#e_form". $row_komen['IDKOMENTAR'] ."').show();
                                    $('#par_komen". $row_komen['IDKOMENTAR'] ."').hide();
                                }else{
                                    $('#e_form". $row_komen['IDKOMENTAR'] ."').hide();
                                    $('#par_komen". $row_komen['IDKOMENTAR'] ."').show();
                                    $('#open_edit". $row_komen['IDKOMENTAR'] ."').html('Edit');
                                }
                                });
                                $('#edit_it". $row_komen['IDKOMENTAR'] ."').on('click',function(){
                                if($('#e_komen". $row_komen['IDKOMENTAR'] ."').val()!=''){
                                    $('#edit_it". $row_komen['IDKOMENTAR'] ."').html('Editing');
                                    var id_post= ". $id_post .";
                                    $.ajax({
                                        type: 'POST',
                                        url: 'sistem_load/load_komen.php?postid=' + id_post,
                                        success: function(msg){
                                            $('#edit_it". $row_komen['IDKOMENTAR'] ."').html('Edit');
                                            $('#e_form". $row_komen['IDKOMENTAR'] ."').hide();
                                            $('#load_comment". $row_komen['IDKOMENTAR'] ."').html(msg);
                                        },
                                    });
                                }else{
                                    $('#edit_it". $row_komen['IDKOMENTAR'] ."').html('Edit');
                                }
                                });
                                //delete
                                $('#delete_it". $row_komen['IDKOMENTAR'] ."').on('click',function(){
                                    $('#delete_it". $row_komen['IDKOMENTAR'] ."').html('Purging');
                                    var id_post= ". $id_post .";
                                    $.ajax({
                                        type: 'POST',
                                        url: 'sistem_load/load_komen.php?postid=' + id_post,
                                        success: function(msg){
                                            $('#delete_it". $row_komen['IDKOMENTAR'] ."').html('Delete');
                                            $('#load_comment". $row_komen['IDKOMENTAR'] ."').html(msg);
                                        },
                                    });
                                });
                            </script>
                        </div>
                    </div>
                    
                </div>
            </div>
        ");
    }
    $conn->close();
?>