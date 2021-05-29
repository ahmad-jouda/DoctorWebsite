<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>{{config('app.name')}} | @yield('title','Defult Value')</title>

        <!-- Bootstrap Core CSS -->
        <link href="/admin/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="/admin/css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="/admin/css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="/admin/css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="/admin/css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="/admin/ckeditor/ckeditor.js" type="text/javascript"></script>
        <script>
        $(document).ready(function(){
        $(".click-slider").click(function(){
            $(".ul-slider-dash").toggleClass("main");
        });
        });
        </script>
        <script>
        $(document).ready(function(){
        $(".click-doctor").click(function(){
            $(".ul-doctor-dash").toggleClass("main");
        });
        });
        </script>
        <script>
        $(document).ready(function(){
        $(".click-service").click(function(){
            $(".ul-service-dash").toggleClass("main");
        });
        });
        </script>
        <script>
        $(document).ready(function(){
        $(".click-client").click(function(){
            $(".ul-client-dash").toggleClass("main");
        });
        });
        </script>
        <script>
        $(document).ready(function(){
        $(".click-contact").click(function(){
            $(".ul-contact-dash").toggleClass("main");
        });
        });
        </script>
        <script>
        $(document).ready(function(){
        $(".click-apponitment").click(function(){
            $(".ul-apponitment-dash").toggleClass("main");
        });
        });
        </script>
        <script>
        $(document).ready(function(){
        $(".click-gallary").click(function(){
            $(".ul-gallary-dash").toggleClass("main");
        });
        });
        </script>
        <script>
        $(document).ready(function(){
        $(".click-setting")});
        </script>
        <style>

            .ul-slider-dash{
                display: none;
            }
            .ul-doctor-dash{
                display: none;
            }
            .ul-service-dash{
                display: none;
            }
            .ul-client-dash{
                display: none;
            }
            .ul-contact-dash{
                display: none;
            }
            .ul-apponitment-dash{
                display: none;
            }
            .ul-gallary-dash{
                display: none;
            }
            .main {
                display: block;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row py-5">
                <div class="col-md-2">
                <div id="wrapper">

                        <!-- Navigation -->
                        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="/admin/dashboard">DOD APP</a>
                            </div>

                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <ul class="nav navbar-nav navbar-left navbar-top-links">
                                <li><a href="/"><i class="fa fa-home fa-fw"></i> Website</a></li>
                            </ul>

                            <ul class="nav navbar-right navbar-top-links">
                                <li class="dropdown" style="position: relative;top: 15px;">
                                @if(Auth::id())
                                    <a class="dropdown-toggle" style="display:inline" data-toggle="dropdown" href="#">
                                        <i class="fa fa-user fa-fw" style="display:inline"></i>
                                        <a style="display:inline;position: relative;right: 17px;">
                                        {{ Auth::user()->name }}
                                    </a>   
                                    </a>
                            
                                    <ul class="dropdown-menu dropdown-user">
                                        <li><a href="/user/profile"><i class="fa fa-user fa-fw"></i> User Profile</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                        <a href="#" onclick="document.getElementById('logout').submit()">logout</a>
                                        <form action="{{ route('logout') }}" method="post" class="d-none" id="logout">
                                            @csrf
                                            <button type="submit" hidden></button>
                                        </form>
                                        </li>
                                    </ul>
                                @endif
                                </li>
                            </ul>
                            <!-- /.navbar-top-links -->

                            <div class="navbar-default sidebar" role="navigation">
                                <div class="sidebar-nav navbar-collapse">
                                    <ul class="nav" id="side-menu">
                                        <li class="sidebar-search">
                                            <div class="input-group custom-search-form">
                                                <input type="text" class="form-control" placeholder="Search...">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-primary" type="button">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                            </span>
                                            </div>
                                            <!-- /input-group -->
                                        </li>
                                        <li>
                                            <a href="/admin/dashboard" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                                        </li>
                                        <li class="click-slider">
                                            
                                            <a href="#"><i class="fa fa-sliders"></i> Sliders <span class="fa arrow"></span></a>
                                            <ul class="nav nav-second-level ul-slider-dash">
                                                <li>
                                                    <a href="/admin/sliders"><i class="fa fa-sliders"></i> All Sliders</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/sliders/create"><i class="fa fa-plus-square"></i> Add Slider</a>
                                                </li>
                                            </ul>
                                            <!-- /.nav-second-level -->
                                        </li>

                                        <li class="click-service">
                                            
                                            <a href="#"><i class="fa fa-user-md"></i> Doctors <span class="fa arrow"></span></a>
                                            <ul class="nav nav-second-level ul-service-dash">
                                                <li>
                                                    <a href="/admin/doctors"><i class="fa fa-user-md"></i> All Doctors</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/doctors/create"><i class="fa fa-plus-square"></i> Add Doctor</a>
                                                </li>
                                            </ul>
                                            <!-- /.nav-second-level -->
                                        </li>

                                        <li class="click-doctor">
                                            
                                            <a href="#"><i class="fa fa-bell"></i> Services <span class="fa arrow"></span></a>
                                            <ul class="nav nav-second-level ul-doctor-dash">
                                                <li>
                                                    <a href="/admin/services"><i class="fa fa-bell"></i> All Services</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/services/create"><i class="fa fa-plus-square"></i> Add Service</a>
                                                </li>
                                            </ul>
                                            <!-- /.nav-second-level -->
                                        </li>

                                        <li class="click-client">
                                            
                                            <a href="#"><i class="fa fa-users"></i> Clients <span class="fa arrow"></span></a>
                                            <ul class="nav nav-second-level ul-client-dash">
                                                <li>
                                                    <a href="/admin/clients"><i class="fa fa-users"></i> All Clients</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/clients/create"><i class="fa fa-plus-square"></i> Add client</a>
                                                </li>
                                            </ul>
                                            <!-- /.nav-second-level -->
                                        </li>

                                        <li class="click-contact">
                                            
                                            <a href="#"><i class="fa fa-phone-square"></i> Contacts <span class="fa arrow"></span></a>
                                            <ul class="nav nav-second-level ul-contact-dash">
                                                <li>
                                                    <a href="/admin/contacts"><i class="fa fa-phone-square"></i> All Contacts</a>
                                                </li>
                                            </ul>
                                            <!-- /.nav-second-level -->
                                        </li>
                                        <li class="click-apponitment">
                                            
                                            <a href="#"><i class="fa fa-comments"></i> Apponitment <span class="fa arrow"></span></a>
                                            <ul class="nav nav-second-level ul-apponitment-dash">
                                                <li>
                                                    <a href="/admin/appointments"><i class="fa fa-comments"></i> All Apponitments</a>
                                                </li>
                                            </ul>
                                            <!-- /.nav-second-level -->
                                        </li>

                                        <li class="click-gallary">
                                            
                                            <a href="#"><i class="fa fa-image"></i> Gallaries <span class="fa arrow"></span></a>
                                            <ul class="nav nav-second-level ul-gallary-dash">
                                                <li>
                                                    <a href="/admin/gallaries"><i class="fa fa-image"></i> All Gallaries</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/gallaries/create"><i class="fa fa-plus-square"></i> Add Gallary</a>
                                                </li>
                                            </ul>
                                            <!-- /.nav-second-level -->
                                        </li>

                                        <li class="click-setting">
                                            
                                            <a href="{{route('admin.settings.edit' , 1 )}}"><i class="fa fa-cogs"></i> Settings </a>
                                            <!-- /.nav-second-level -->
                                        </li>
                                        

                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="col-md-10">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="/admin/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="/admin/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="/admin/js/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="/admin/js/raphael.min.js"></script>
        <script src="/admin/js/morris.min.js"></script>
        <script src="/admin/js/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="/admin/js/startmin.js"></script>

    </body>
</html>
