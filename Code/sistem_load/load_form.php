<form class="padding-large" method="POST" enctype="multipart/form-data">
    <div style="height: 256px" class="form-group">
        <label class="balooBlack" for="i_file" >Upload Karya</label><br>
        <div class="text-center padding large">
            <input id="" name="i_file" type="file" style="margin-top:64px" class="form-control-file" >
        </div>
    </div>
    <br>
    <div class="form-group">
        <Label class="balooBlack" for="i_title">Judul</label>
        <input id="" name="i_title" class="form-control" style="background-color: lightgrey!important;" type="text" placeholder="Masukkan Judul Disini...">
    </div>
    <br>
    <div class="form-group">
        <label class="balooBlack" for="i_deskripsi">Deskripsi</label>
        <textarea id="" name="i_deskripsi" class="form-control" style="background-color: lightgrey!important;" rows="4" placeholder="Masukkan Deskripsi Disini..."></textarea>
    </div>
    <br>
    <div class="form-group row">
        <div>
            <label for="i_genre" class="balooBlack">Pilih Kategori</label>
        </div>
        <div class="col-7">    
            <select class="form-control" id="" name="i_genre">
            <option value="">Pilih kategori...</option>
                <?php
                    $result = mysqli_query($conn, "SELECT * FROM kategori");
                    while($row_ins = mysqli_fetch_array($result)){
                        echo "<option value=". $row_ins['IDKATEGORI'] .">". $row_ins['NAMAKATEGORI'] ."</option>";
                    }
                ?>
            </select>
        </div>
    </div>
    <br><br>
    <div class="col right">
        <button type="submit" style="text-align:right" class="btn btn-primary fBaloo base-color" id="" name="post_it">Post it!</button>
    </div>
</form>