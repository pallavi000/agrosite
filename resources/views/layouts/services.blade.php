<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Saparc Agro Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Grand+Hotel&display=swap" rel="stylesheet">

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

        img{
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

    </style>
</head>
<body>
@include('layouts.navbar')

<div class="body-wrap">
    <div class="page_top_wrap page_top_title page_top_breadcrumbs">
        <div class="content_wrap">
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href=" ">Home</a>
                <span class="breadcrumbs_delimiter"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                <span class="current">Services</span>
            </div>
            <h3 class="page_title" >Services</h3>
        </div>
    </div>
</div>
<br>
<br>


@include('layouts.footer')






</body>
</html>
