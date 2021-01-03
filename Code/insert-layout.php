<?php
    //include(db_connect);
?>

<!DOCTYPE html>
<html>
    <head> 
        <link rel="stylesheet" href="style.css" type="text/css">
        <title>
            *Judul* | Insert Your Art
        </title>
    </head>    

    <body>
        <div class="padding" style="margin: 16px 16px">
        <form>
            <h1 class="center padding">Submit Your Art</h1>
            <h3 class="padding-small">Upload Your File</h3> <!-- insert File -->
            <div class="lightgrey" style="height: 256px">
                <div class="center padding-large">
                    <input class="" style="margin-top:64px" type="file" id="INSfile" name="INSfile">
                </div>
            </div>
            <h3 class="padding-small">Title</h3> <!-- insert Title -->
            <div>
                <input class="padding-large" style="background-color: lightgrey; width:93%" type="text" id="INStitle" name="INStitle" value="Type your title here...">
            </div>
            <h3 class="padding-small">Description</h3> <!-- insert Description -->
            <div>
                <input class="padding-large" style="background-color: lightgrey; width:93%; height:256px" type="text" id="INStitle" name="INStitle" value="Type your description here...">
            </div>
            <h3 class="padding-small">Category</h3> <!-- insert Category -->
                <select id="category" name="category">
                    <option value="Abstract">Abstract</option>
                    <option value="Surrealism">Surrealism</option>
                    <option value="Realism">Realism</option>
                    <option value="Anime">Anime</option>
                </select><br>
            <div class="right">
                <input class="padding" style="background-color: #31726E; color:white" type="submit" value="submit">
            </div>
            
        </form>
        </div>
            

    </body>
</html>
