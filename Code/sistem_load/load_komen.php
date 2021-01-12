<?php
    $komen_query =" SELECT
                        *
                    FROM komentar
                    WHERE IDPOST = $id_post
    ";

    $res_komen = $conn->query($komen_query);
    while($row_komen = mysqli_fetch_array($res_komen)){
        echo ("
            <div class='row roboto>
                <div class='padding'>
                    <div class='col-1 media-left'>
                        <img src='Image/icon/account.png' class='media-object' style='width:36px'>
                    </div>
                    <div class='col media-body'>
                        <div class='row'>
                            <h6 class='col-2 media-heading'>
                                <b>". $row_komen['USERNAME'] ."</b>
                            </h6>
                            <div class='col-1 media-body'>
                                <p style='font-size:12px'>  ". $row_komen['TANGGALKOMENTAR'] ."</p>
                            </div>  
                        </div>
                        <div class='media-body padding  justify'>
                            <p>". $row_komen['ISIKOMENTAR'] ."</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        ");
    }
    $conn->close();
?>