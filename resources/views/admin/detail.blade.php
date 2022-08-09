<html>
<title>detail</title>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Grand+Hotel&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
{{--    <link rel="stylesheet" type="text/css" href="{{ asset("style.css")}}">--}}


        <style>
        .navbar-nav .nav-item {

            margin-right: 30px;
            font-family: 'Hind', sans-serif;
            font-weight: bold;

        }

        .navbar-nav a:hover {
            background-color: #9cc900;
        }

        .title-blogspot {
            margin-top: 0;
            margin-bottom: 20px;
            font-family: 'Hind', sans-serif;
            font-size: 20px;
        }

        .post_content {
            display: block;
            /*margin: 20px;*/
            /*padding: 10px;*/
            margin-top: 2rem;
        }
        img{
            margin-top: 20px;
        }

        .post_info_item .post_info_date {
            font-size: 20px;
            color: #9cc900;
            font-family: 'Grand Hotel', cursive;
        }

        .post_info_author {
            margin: 7px;
            font-size: 20px;
            color: #9cc900;
            font-family: 'Grand Hotel', cursive;

        }

        .a:hover {
            color: black;
        }

        .post_counters_views {
            font-size: 20px;
            color: #9cc900;
            font-family: 'Grand Hotel', cursive;
            margin: 20px;

        }

        .page_top_wrap {
            background: #313a42;
            overflow: hidden;
            height: 75px;
            margin-bottom: 30px;
        }

        .page_top_wrap .page_title {
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

        .page_top_breadcrumbs .breadcrumbs_item {
            color: darkgray;
        }

        .page_top_breadcrumbs .breadcrumbs_item:hover {
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

        .post_content {
            /*width: 75%;*/
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

        .share_caption {
            font-size: 25px;
            font-family: "Grand Hotel";
            color: #000000;
        }

        .sc_socials .sc_socials_item {
            display: inline-block;
            margin: 0 10px;
        }

        .icon {
            color: #9cc900;
            font-size: 25px;
            border-radius: 100px;
            /*border: 2px solid #9cc900; */
            padding: 5px;
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


<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top" style="height: 90px;">
    <div class="container-fluid">
        <a class="nabvar-brand" href="{{url('/home')}}"><img src="{{asset('image/green.jpg')}}"
                                                             height="45px" style="padding-left: 60px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/home')}}"> Home</a></li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{url('/contact')}}"> Contact</a></li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{url('/aboutus')}}"> About Us</a></li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{url('/services')}}"> Services</a></li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{url('/blog')}}"> Blog</a></li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{url('/gallery')}}"> Gallery</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="body-wrap">
    <div class="page_top_wrap page_top_title page_top_breadcrumbs">
        <div class="content_wrap">
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href=" ">Home</a>
                <span class="breadcrumbs_delimiter"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                <a class="breadcrumbs_item all" href="#">All posts</a>
                <span class="breadcrumbs_delimiter"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                <a class="breadcrumbs_item cat_post" href="#">Masonry (2 columns)</a>
                <span class="breadcrumbs_delimiter"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                <span class="current">{{Str::limit($singlepost->title, 30, $end='...')}}</span>
            </div>
            <h3 class="page_title">{{Str::limit($singlepost->title, 40, $end='...')}}</h3>
        </div>
    </div>
</div>


    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h5 class="title-blogspot"><b>{!!$singlepost->title!!}</b></h5>
                <div class="post_info">
                     <span class="post_info_item">
{{--            <p style="font-size:17px; color:#9cc900; font-family: 'Grand Hotel', cursive; ">June 22,2015 <span style=" color: #8b939b; ">by</span> admin <i class="fa fa-eye "  aria-hidden="true"></i>28062</p></span>--}}

                  <span class="post_info_date a" itemprop="datePublished" content="2015-06-22">June 22,2015</span>
                    <span class=" " itemprop="author" style=" color: #8b939b; font-family: 'Grand Hotel', cursive; font-size:20px; ">by
                      <span class="post_info_author a">admin</span>
                    </span>

             <span class="post_counters_views" title="Views - 28072">
                <span><i class="fa fa-eye" aria-hidden="true"></i></span> 28072</span>
             </span>

                </div>
                <img src="{{asset ('uploads/photos/' . $singlepost->image)}}" alt="image" width="50%" height="400px" style="object-fit: cover"
                     class="img-fluid">

                <section class="post_content" itemprop="articleBody">
                    <p>{!!$singlepost->description!!}</p>

                    <div class="post_info post_info_bottom">
                    <span class="post_info_item post_info_tags">Tags: <a class="post_tag_link" href="#">ecology</a>, <a
                            class="post_tag_link" href="#">energy</a></span>
                    </div>

                    <div class="post">
                        <div class="sc_socials ">
                            <span class="share_caption">SHARE:</span>
                            <div class="sc_socials_item">
                                <a href="#" class="social_icons ">
                                    <span class="icon"><i class="fa fa-facebook-square"
                                                          aria-hidden="true"></i></span></a>
                            </div>
                            <div class="sc_socials_item">
                                <a href="#" class="social_icons ">
                                    <span class="icon"><i class="fa fa-linkedin-square"
                                                          aria-hidden="true"></i></span></a>
                            </div>
                            <div class="sc_socials_item">
                                <a href="#" class="social_icons ">
                                    <span class="icon"><i class="fa fa-instagram" aria-hidden="true"></i></span></a>
                            </div>
                            <div class="sc_socials_item"><a href="#" target="_blank"
                                                            class="social_icons social_twitter">
                                    <span class="icon"><i class="fa fa-twitter" aria-hidden="true"></i></span></a>
                            </div>
                        </div>
                    </div>


                </section>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Categories</h5>
                        <div class="list-group">
                            @foreach($categories as $category)
                                <a href="{{route('categories.show',$category->id)}}" class="list-group-item list-group-item-action">{{ $category->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




<footer class="ftco-footer ftco-section footer-color " style="padding-top:50px;">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2"><b>STAY CONNECTED</b></h2>
                    <p><i class="fa fa-map-marker" aria-hidden="true" style="color: white;"></i>
                        <small style="color: papayawhip; margin: 10px;"> Mid Baneshwor , Prabachan Marg, Kathmandu </small>  </p>
                    <p> <i class="fa fa-phone" aria-hidden="true" style="color: white;"></i> <small style="color: papayawhip; margin: 10px;">
                            9814241960 </small> </p>
                    <p> <i class="fa fa-envelope" aria-hidden="true" style="color:white;"></i><small style="color: papayawhip; margin: 10px;"> kandelsujata333@gmail.com </small></p>
                </div>
                <i class="fa fa-facebook" style="color:darkblue;margin-right: 10px;font-size: 20px;"></i>
                <i class="fa fa-instagram" style="color:  #e60571;margin-right: 10px;font-size: 20px;"></i>
                <i class="fa fa-twitter"style="color: #00acee;font-size: 20px;"></i>
            </div>
            <div class="col-md-4 no-padding-bottom col-sn-4 col-xs-12" ;>
                <h2 class="ftco-heading-2"><b>ABOUT US</b></h2>
                <p> <small style="color: papayawhip">Six Sigma is "A Complete Guide to Technology" and the ultimate portal to get information, news,
                        reviews, price, comparison of different products and connecting the buyer with the nearest
                        store. </small></p>
            </div>
            <div class="col-md-4">
                <div class="ftco-footer-widget mb-4 md-4">
                    <h2 class="ftco-heading-2"><b> NAVIGATE </b></h2>
                    <ul class="list-unstyled" style="font-size:12px; line-height: 20px;">

                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Privacy </a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Terms & Conditions</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact Us</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <p class="p-3 bg-dark text-white">
                © sixsigma.com -
                <script type="text/javascript">
                    document.write(new Date().getFullYear());
                </script>
                All rights reserved. &nbsp;&nbsp;&nbsp
            </p>
        </div>
    </div>
</footer>

<div class="row">
    <div class="col-md-12 text-center">
        <p class="p-3 bg-dark text-white"> © sixsigma.com - 2019.
            All rights reserved. &nbsp;&nbsp;&nbsp
        </p>
    </div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
