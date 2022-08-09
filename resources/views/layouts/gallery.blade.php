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

    .contact-section {
        background: url("image/one.jpg") no-repeat center;
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
        background:#111;
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
        background:
            #34495e;
        color:#fff;
        padding: 12px 50px;
        border-radius:20px;
        cursor: pointer;
        transition:0.5s;

    }
    .contact-form-btn:hover{
        background:#2980b9;

    }
    .gallery{
        border:1px solid #ccc;

    }
    .gallery img{
        width:100%;
        height:40%;
    }
    .des{
        padding:15px;
        text-align:center;
    }
    .sc_line {
        color: #9cc900;
        height: 4px;
        margin: 12px;
        border: 2px;
        margin: auto;
        width: 50px;
        margin-top: 0px;
        margin-top: 20px;
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



</style>
</head>
<body>

<!--- Navigation -->
@include('layouts.navbar')
<div class="container-head">
<div class="body-wrap">
    <div class="page_top_wrap page_top_title page_top_breadcrumbs">
        <div class="content_wrap">
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href=" ">Home</a>
                <span class="breadcrumbs_delimiter"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                <span class="current">Gallery</span>
            </div>
            <h3 class="page_title">Gallery</h3>
        </div>
    </div>
</div>
</div>
<div class="container-body">
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center"> Our Gallery</h2>
        <div class="sc_line" style="border-top-style:double;"></div>
    </div>

    <div class="container-fluid">
        <div class="row">
            @foreach($image as $gal)
            <div class="col-lg-4 col-md-4 col-12 ">
                <img src="{{asset('uploads/photos/'. $gal->image)}}" class="img-fluid pb-3" style="width: 500px; height: 250px; object-fit:cover ">
                <div class="card-body">
                    <h5 class="card-title">{{$gal->title}}</h5>
                </div>
            </div>
            @endforeach()
         </div>
    </div>
</section>

</div>



<br>
<br>




@include('layouts.footer')


</body>
</html>
