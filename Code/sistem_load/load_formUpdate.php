<?php
    ob_start();
?>
<form class="padding-large" method="POST">
    <div style="height: 256px" class="form-group">
        <label class="balooBlack" for="i_file" >Gambar Karya</label><br>
        <div class="text-center padding large">
            <!-- Query select table post sesuai id -->
            <?php
                $result = mysqli_query($conn, "SELECT * FROM post WHERE IDPOST = $id_post;");
                $data = mysqli_fetch_array($result);
            ?>
            <img src="<?php echo $data['GAMBAR'] ?>" alt="" style="max-width: 200px; max-height:200px;">
        </div>
    </div>
    <br>
    <div class="form-group">
        <Label class="balooBlack" for="i_title">Edit Judul</label>
        <input id="" name="e_title" class="form-control" style="background-color: lightgrey!important;" type="text" placeholder="<?php echo $data['TITLE'] ?>" required>
    </div>
    <br>
    <div class="form-group">
        <label class="balooBlack" for="i_deskripsi">Deskripsi</label>
        <textarea id="" name="e_deskripsi" class="form-control" style="background-color: lightgrey!important;" rows="4" placeholder="<?php echo $data['DESKRIPSI'] ?>" required></textarea>
    </div>
    <br>
    <div class="form-group row">
        <div>
            <label for="i_genre" class="balooBlack">Pilih Kategori</label>
        </div>
        <div class="col-7">    
            <select class="form-control" id="" name="e_genre">
            <option value="" required>Pilih kategori...</option>
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
        <button type="submit" style="text-align:right" class="btn btn-primary fBaloo base-color" id="" name="save_it">Save it!</button>
    </div>
</form>