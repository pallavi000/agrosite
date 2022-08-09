
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Saparc Agro Website</title>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Grand+Hotel&display=swap" rel="stylesheet">
{{--    <link rel="stylesheet" type="text/css" href="{{ asset("style.css")}}">--}}

    <style>
        .navbar-nav .nav-item{

            margin-right: 30px;
            font-family: 'Hind', sans-serif;
            font-weight: bold;
        }
        .navbar-nav a:hover{
            background-color: #9cc900;
        }
        .page_top_wrap {
            background: #313a42;
            overflow: hidden;
            height: 75px;
            margin-bottom: 30px;
        }

        .page_top_wrap .page_title{
            font-size: 25px;
            padding-left: 90px;
            text-transform: none;
            width: 50%;
            color: white;
            background-color: #313a42;
            margin-top: 20px;
        }

        .page_top_wrap.page_top_title .breadcrumbs {
            width: 50%;
            float: right;
            margin-top: 10px;
            padding-right: 50px;
            /*line-height: normal;*/
            text-align: right;
            font-size: 15px;
            color: #ffffff;
        }
        .page_top_breadcrumbs .breadcrumbs_item{
            color: darkgray;
        }
        .page_top_breadcrumbs .breadcrumbs_item:hover{
            color: #ffffff;
            text-decoration: none;
        }

        .page_top_wrap .breadcrumbs .breadcrumbs_delimiter {
            vertical-align: top;
            top: 0;
        }

        .page_top_wrap .breadcrumbs .breadcrumbs_delimiter {
            display: inline-block;
            position: relative;
            top: 4px;
            color: #a6ccc0;
            font-size: 16px;
            margin: 0 10px;
        }
        .post_content{
            width: 75%;
        }


        .post_info_bottom {
            margin-top: 30px;
            margin-bottom: 30px;
        }
        .post_info .post_info_tags {
            font-size: 21px;
            font-family: "Grand Hotel";
            color: #000000;
        }

        .post_info_tags .post_tag_link {
            font-size: 23px;
            font-family: "Grand Hotel";
            color: #9cc900;
            text-decoration: none;
        }
        .post_info_tags .post_tag_link:hover {
            color: black;
        }
        .contact-section{
            background: url("image/one.jpg")no-repeat center;
            background-size:cover;
            padding: 40px 0;
        }
        .contact-section h1{
            text-align:center;
            color:#ddd;
        }
        .border{
            width:100px;
            height:10px;
            background:#34495e;
            margin:40px auto;
        }
        .contact-form{
            max-width:600px;
            margin: auto;
            padding:0 10px;
            overflow:hidden;

        }
        .contact-form-text{
            display:block;
            width:100%;
            box-sizing:border-box;
            margin:16px 0;
            border:0;
            background:#ffffff;
            padding:20px 40px;
            outline:none;
            color:#ddd;
            transition:0.5s;

        }

        .contact-form-text:hover{
            box-shadow: 0 0 10px 4px #34495e;

        }

        textarea.contact-form-text{
            resize:none;
            height:120px;

        }

        .contact-form-btn{
            float:right;
            border:0;
            background: darkgreen;
            color:#fff;
            padding: 12px 50px;
            border-radius:20px;
            cursor: pointer;
            transition:0.5s;

        }
        .contact-form-btn:hover{
            background:#2980b9;

        }

        .des{
            padding:15px;
            text-align:center;
        }
        .img{
            border-style:none;
        }
        p{
            margin-top:0;
            margin-bottom: 0;
        }
        .footer-color {
            background-color: #313a42;
            padding: 20px !important;
            margin: 0px 0px !important;
            max-width: 100%;
        }
        .ftco-heading-2 {
            color: white;
            font-size: 20px;
            font-family: sans-serif;
            font-weight: 400;
        }
        .ftco-footer-widget {
            /*text-align: center;*/
        }
        a{
            color:white;
        }

        .container{
            margin-top: 30px;
        }
        .map-container iframe{
            height: 60%;
            width: 100%;
        }

    </style>
</head>
<body>

<!--- Navigation -->
@include('layouts.navbar')
<div class="body-wrap">
    <div class="page_top_wrap page_top_title page_top_breadcrumbs">
        <div class="content_wrap">
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href=" ">Home</a>
                <span class="breadcrumbs_delimiter"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                <span class="current">contacts</span>
            </div>
            <h3 class="page_title" >Contacts</h3>
        </div>
    </div>
</div>

<div id="map-container-google-1" class="z-depth-1-half map-container" style="width:100%;"  >
    <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
            style="border:0" allowfullscreen></iframe>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div>
            <i class="fa fa-map-marker" aria-hidden="true" style="color:#9cc900; font-size: 20px;"></i>
                Prabachan-Marg, Mid-Baneshwor
            </div>

        </div>
        <div class="col-md-4">
            <div>
            <i class="fa fa-phone" aria-hidden="true" style="color:#9cc900; font-size: 20px;"></i>
                998 0067 766
            </div>
        </div>
        <div class="col-md-4">
            <i class="fa fa-envelope" aria-hidden="true" style="color:#9cc900; font-size: 20px;"></i>
            sixsigma@gmail.com
        </div>

    </div>
</div>
<br>

<div class="contact-section">
    <h1> Contact Us </h1>
    <form class="contact-form" action="home.blade.php" method="post">
        <input type="text" class="contact-form-text" placeholder="Your name">
        <input type="email" class="contact-form-text" placeholder="Your email">
        <input type="text" class="contact-form-text" placeholder="Your phone">
        <textarea class="contact-form-text" placeholder="Your message"></textarea>
        <input type="submit" class="contact-form-btn" value="SEND">
    </form>
</div>



<br/>

@include('layouts.footer')






</body>
</html>
