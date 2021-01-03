<!doctype html>
<html>
    <head>
        <title>Art Gallery</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
        <style>
            body{
                background-color: #31726E;
            }
            @font-face{
                font-family: 'Baloo'; /*memberikan nama bebas untuk font*/
                src: url('Font/Baloo/Baloo.ttf');/*memanggil file font eksternalnya di folder Baloo*/
            }
            @font-face{
                font-family: 'Share Tech'; /*memberikan nama bebas untuk font*/
                src: url('Font/ShareTech/ShareTech-Regular.ttf');/*memanggil file font eksternalnya di folder Baloo*/
            }
            .navbar-brand{
                font-family: Baloo;
                font-size: 36px;
                padding: 0px;
                color: #FFF6C4!important;
                font-variant: small-caps;
            }
            #menuLogin{
                font-family: ShareTech;
                font-size: 30px;
                padding: 0px;
                color: #FFF6C4!important;
                margin-right: 20px;
                text-decoration: none;
            }
            .d-flex{
                margin-top: -20px;
                margin-bottom: -10px;
            }
            hr{
                margin-top: 0px;
                border: 2px solid #FFF6C4!important;
            }
            .titlePage{
                //border: 1px solid blue;
                margin-right: 40%;
                margin-left: 100px;
                margin-top: 130px;
            }
            .titlePage p{
                font-family: Share Tech;
                text-align: center;
                font-size: 64px;
                color: #FFF6C4;
                text-decoration: none;
                margin-top: 0px;
                margin-bottom: 0px;
                //border: 1px solid red;
            }
            #joinUs{
                font-family: Share Tech;
                text-align: center;
                font-size: 36px;
                color: #FFF6C4;
                text-decoration: none;
                background-color: #194E4A;
                width: 400px;
                border-radius: 30px;
                margin-top: 0px;
                margin-left: 135px;
            }
            #landing{
                width: 385px;
                height: 490px;
                float: right;
                margin-top: -360px;
                margin-right: 100px;
                border-radius: 10px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-light navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="">Art Gallery</a>
                </div>
                <div class="d-flex">
                    <h1><a href="" id="menuLogin">Login</a></h1>
                    <h1><a href="" id="menuLogin">Join</a></h1>
                </div>
            </div>
        </nav>
        <hr>
        <div class="titlePage">
            <p>Get Your Next</p>
            <p>Design Art Idea</p>
            <button id="joinUs">Join Us</button>
        </div>
        <img id="landing" src="Image/img/landing.PNG">

        <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>