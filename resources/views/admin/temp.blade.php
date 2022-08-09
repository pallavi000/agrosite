
<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{url('/home')}}"> <img src="{{asset('image/log.png')}}"  alt="Logo"> </a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{url('/dashboard')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <h3 class="menu-title">Elements</h3><!-- /.menu-title -->

                <li class="nav-item">
                    <a class="nav-link"  href="{{url('/create')}}" > <i class="menu-icon fa fa-image"></i>Image</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"  href="{{url('/post')}}" > <i class="menu-icon fa fa-cog"></i>Posts</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"  href="{{url('/admin/users')}}" > <i class="menu-icon fa fa-user"></i>Users</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"  href="{{url('/event')}}" > <i class="menu-icon fa fa-calendar"></i>Events</a>
                </li>
                <li class="nav-item">

                    <a class="nav-link"  href="{{url('/categories')}}" > <i class="menu-icon fa fa-cog"></i>categories</a>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">
        <div class="header-menu">
            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
            </div>
            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user-circle-o" aria-hidden="true" style="font-size:25px;color:antiquewhite"></i>
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>
                        <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications</a>
                        <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>
                        <a class="nav-link"  href="{{url('/home')}}" > <i class="fa fa-power-off"></i>Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

   <!-- /header -->
    <!-- Header-->




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src=" https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src=" https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

        <script>
            $(document).ready(function() {

                $('#menuToggle').on('click', function(event) {
                    $('body').toggleClass('open');
                });

            });

        </script>









