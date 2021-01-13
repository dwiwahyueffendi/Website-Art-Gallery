<script type="text/javascript">
    $("#comment_it").on("click",function(){
      if($("#comment_area").val()!=""){
        $("#process_insert").show();
        var id_post= <?php echo ($id_post) ?>;
        $.ajax({
            type: "POST",
            url: "sistem_load/load_komen.php?postid=" + id_post,
            success: function(msg){
                $("#process_insert").hide();
                $("#comment_area").val()="";
                $("#load_comment").html(msg);
            },
        });
      }else{
        $("#process").hide();
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
</script>
