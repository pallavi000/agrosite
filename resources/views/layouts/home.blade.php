
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Saparc Agro Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Grand+Hotel&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset("style.css")}}">


</head>
<body>
<!--- Navigation -->

@include('layouts.navbar')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('image/one.jpg')}}" style="width: 100%; height: 500px;">
                <div class="carousel-caption">
                    <h1>Create</h1>
                    <p class="lead" >This text is super engaging and makes you want to click the button.</p>
                    <a href="#" class="btn btn-lg btn-primary">Learn More </a>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="{{asset('image/two.jpg')}}" style="width: 100%; height: 500px;">
                <div class="carousel-caption">
                    <h1>Check Out</h1>
                    <p class="lead"  >This text is super engaging and makes you want to click the button.</p>
                    <a href="#" class="btn btn-lg btn-primary">Learn More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('image/three.jpg')}}" style="width: 100%; height: 500px;">
                <div class="carousel-caption">
                    <h1>Check Moose</h1>
                    <p class="lead">This text is super engaging and makes you want to click the button.</p>
                    <a href="#" class="btn btn-lg btn-primary">Learn More</a>
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>

    <div class="wpb_wrapper">
        <div class="sc_section animated fadeInDown normal" data-animation="animated fadeInDown normal">
            <h3 class="sc_title sc_title_regular sc_align_center title_with_b" style=
            "margin-top:30px; text-align:center;">

                <b> <span class="bold-text-green">20 years </span></b>
                of making changes

            </h3>
        </div>
    </div>
    <div class="sc_line" style="border-top-style:double;"></div>

    <h4 class="content" style="margin-top:.44em;">
        <p style="font-size: 20px; text-align:center; margin-bottom: 30px;"> This is my homepage </p>
    </h4>



<div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding" style="position: relative;  box-sizing: border-box; width:100%;">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div class="sc_parallax bg_tint_light" data-parallax-speed="-0.1" data-parallax-x-pos="50%" data-parallax-y-pos="50%">
                    <div class="sc_parallax_content" style="background-image: url(&quot;http://greenrescue.ancorathemes.com/wp-content/uploads/2015/02/bg3.jpg&quot;); background-position: 50% -1px;">
                        <div class="sc_section" style="padding: 5em 0;">
                            <h2 class="sc_title sc_title_regular sc_align_center" style="color:#fff;text-align:center; font-family: 'Hind'; font-weight: bold; font-size: 40px; margin-top: -20px;">{{ $event->event_title }}</h2>
                            <div class="sc_line sc_line_style_double" style="border-top-style:double;border-top-color:#9cc900;"></div>
                            <div class="sc_section" style="color:#ffffff;">
                                <div class="wpb_text_column wpb_content_element  text-phone">
                                    <div class="wpb_wrapper">
                                        <p style="text-align: center; font-family: 'Hind', sans-serif;font-size: 15px; margin-top: 15px;">{{ ($event->event_description) }}</p>
                                    </div>
                                </div>
                                <h5 class="sc_title sc_title_regular sc_align_center title_with_b" style="margin-bottom:2em;text-align:center;color: #9cc900; font-family: 'Grand Hotel';  font-weight: bold;">{{ $event->starting_date }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--    <div class="content-wrapper">--}}
{{--        <img src="{{asset('image/climate.jpg')}}">--}}

{{--        <div class="text-wrapper1">--}}
{{--            <h1 style="font-size: 40px;"><b>{{ $event->event_title }}</b></h1>--}}
{{--            <div class="sc_line2 " style="border-top-style:double;">--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <p style="text-align: center; font-family: Hind; color: white; margin-top: -10px;  font-size: 20px;"> {{ ($event->event_description) }}</p>--}}
{{--            </div>--}}
{{--            <h3 class="date" style="margin-top:10px;text-align:center; font-family:'Grand Hotel', cursive;color:#9cc900"><b>{{ $event->starting_date }}</b></h3>--}}
{{--            <div class="container block-countdown ">--}}
{{--                <div id="countdown"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <br/><br/>





        <p style="font-size:30px; text-align:center; margin-bottom: 30px;">Our Projects</p>
        <div class="sc_line1" style="border-top-style:double; margin-bottom: 30px;"></div>

        <div class="page-content page-container" id="page-content">
            <div class="padding">
                <div class="row container-fluid">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="owl-carousel">
                                    @foreach($data as $content)
                                        <div class="item">
                                          <a href="{{route('detail.show',$content->id)}}">
                                              <img src="{{asset ('uploads/photos/' . $content->image)}}" alt="image" >
                                              <h3><a href="{{route('detail.show',$content->id)}}">{{$content->title}}</a></h3>
                                              <h6 class="small text-wide p-b-2 "> {{($content->created_at)}}</h6>
                                              <div class="text-block">
                                                  <h4><a href="{{route('detail.show',$content->id)}}">{{$content->title}}</a></h4>
                                                  <h6 class="small text-wide p-b-2 "> {{($content->created_at)->format('Y-m-d')}}</h6>
                                              </div>
                                          </a>
                                            <h3><a href="{{route('detail.show',$content->id)}}">{{$content->title}}</a></h3>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <br/>

    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <p style="font-size:30px; text-align:center;">Meet the team</p>
            </div>
            <div class="sc_line"style="border-top-style:double;">

            <hr>
            <br>
        </div>
    </div>

    <br>
    <br>
    <div class="container-fluid padding">
        <div class="row padding">

            <div class="col-md-4">

                <div class="card">
                    <img class="card-img-top" src="image/fr-01.jpg">
                    <div class="card-body">
                        <h6 class="card-title"> Pallavi Bhattarai </h6>
                        <p class="card-text"> Pallavi is is an Internet enterpreneur with almost 2 years of experience. </p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="image/fr-02.jpg">
                    <div class="card-body">
                        <h6 class="card-title"> Sujata Kandel </h6>
                        <p class="card-text"> Sujata is a designer with almost 2 years of digital design experience. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" >
                    <img class="card-img-top" src="image/fr-03.jpg">
                    <div class="card-body">
                        <h6 class="card-title"> Sheelpa Sapkota</h6>
                        <p class="card-text"> Sheelpa is a web developer with 5 years of web development experience. </p>


                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
<br>

@include('layouts.footer')




    <!---Script Source Files--->
    <script src="{{ asset("js/jquery-3.3.1.min.js") }}"></script>
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
    <!---End of Script Source Files--->
    <script>
        $(document).ready(function() {

            $(".owl-carousel").owlCarousel({

                autoPlay: 3000,
                items : 3,
                itemsDesktop : [1199,3],
                itemsDesktopSmall : [979,3],
                center: true,
                nav:true,
                loop:true,
                responsive: {
                    600: {
                        items: 3
                    }
                }

            });

        });

    </script>

</body>
</html>




