
 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <meta property="og:url"           content="@yield('url')" />
    <meta property="og:type"          content="game.achievement" />
    <meta property="og:title"         content="@yield('titulo')" />
    <meta property="og:description"   content="@yield('desc')" />
    <meta property="og:image"         content="@yield('image')" />
    <meta property="fb:app_id"         content="185839948478205" />
    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{url('/inicio/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('/font-awesome-4.6.3/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{url('/ionicons-2.0.1/css/ionicons.min.css')}}">
    <!-- Custom CSS -->
    <link href="{{url('/inicio/css/shop-homepage.css')}}" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{url('/vuela.png')}}"/>
    <link rel="stylesheet" href="{{url('/adminis/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{url('/adminis/dist/css/skins/_all-skins.min.css')}}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
        tinymce.init({ selector:'textarea',
                      plugins: "emoticons textcolor colorpicker",
                      toolbar: "emoticons | forecolor backcolor",
                      max_width: 200,
                      max_height: 400,
                      width: 500,

                  });
    </script>
    <script type="text/javascript" src="{{url('')}}/inicio/js/jsapi"></script>
    <script type="text/javascript" src="{{url('')}}/inicio/js/wpgmp-google-map.js"></script>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Escuela De Altos Estudios Nacionales</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{url('')}}">INICIO</a>
                    </li>
                    <li>
                        <a href="#">NOTICIAS</a>
                    </li>
                    <li>
                        <a href="{{url('/torneos.html')}}">TORNEOS</a>
                    </li>
                    <li>
                        <a href="#">ACERCA DEL GRUPO</a>
                    </li>
                    @if(!Auth::check())
                   <li>
                     <a href="" data-toggle="modal" data-target="#modal-register">REGISTRATE</a>

                   </li>
                   @endif;
                </ul>
                <ul class="nav navbar-nav navbar-right">
                @if(!Auth::check())


                    <li><a data-toggle="modal" data-target="#loginModal" href=""><span class="glyphicon glyphicon-log-in"></span> INGRESAR</a></li>



                @else
                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>{!!Auth::user()->nombre!!}<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-header">Opciones de Usuario</li>
                    <li><a href="">Mi perfil</a></li>
                    @if(Auth::user()->tipo=='admin')
                    <li><a href="{{url('/admin')}}">Acceder al admin</a></li>
                    @endif
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Desconectarte</li>
                    <li><a href="{{url('/logout')}}">Salir</a></li>
                </ul>
                </li>


                @endif
                </ul>

      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    @yield('content')

</body>
</html>
