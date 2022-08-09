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
                <li class="nav-item active ">
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
