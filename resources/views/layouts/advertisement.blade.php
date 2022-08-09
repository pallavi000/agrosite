<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
</head>





<body>
<nav class=" fixed-nav-bar navbar navbar-expand-lg navbar-dark bg-color fixed-top">
    <a class="navbar-brand" href="{{url('/home')}}"><img src="image/logo-white.png "></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
                <a class="nav-link" href="{{url('/home')}}"> Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/contact')}}">Contact </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/team')}}">Team</a>
            </li><li class="nav-item">
                <a class="nav-link" href="{{url('/aboutus')}}">About Us</a>

            </li><li class="nav-item">
                <a class="nav-link" href="{{url('/services')}}">Services</a>
            </li>
        </ul>

    </div>
</nav>
<div class = "py-5">
    <h2 class = "text-center">Advertisement</h2>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-lg-6 col-12 ">
            <img src="image/eight.jpg " class="img-fluid">
        </div>
        <div class="col-lg-6 col-lg-6 col-12 ">
        </div>
    </div>
</div>







@include('layouts.footer')
</body>
</html>



