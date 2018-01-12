@extends('layouts.header')

@section('title', 'Pokémon Bolivia')
@section('url',url('/'))
@section('titulo','Pokémon Bolivia')
@section('desc','Comunidad Oficial de Bolivia')
@section('image',url('/imagenes/logo.jpg'))
    <!-- Page Content -->
    @section('content')
    <div class="container">

        <div class="row">

            @include('layouts.item_izquierdo')

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img  class="slide-image" src="{{url('/imagenes/carrusel/marraqueta.jpg')}}" alt="">

                                </div>
                                <div class="item">
                                    <img class="slide-image" src="{{url('/imagenes/carrusel/bicu.jpg')}}" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="{{url('/imagenes/carrusel/cbba.jpg')}}" alt="">
                                    <div class="carousel-caption">
          <h3 >Liga Cochabamba</h3>
          <p>Proxima apertura!! cooperen con el nombre :D</p>
        </div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <!-- <div class="col-sm-4 col-lg-4 col-md-4">

                        <div class="thumbnail">
                            <img style="width: 320px; height: 150px;" src="" alt="">
                            <div class="caption">

                                <h4><a href=""></a>
                                </h4>
                                <p><a target="_blank" href="">Ver mas info</a>.</p>
                            </div>
                            <div class="ratings">


                            </div>
                        </div>
                    </div> -->




                </div>

            </div>
            <!-- ESTO NO BORRAR -->
        </div>

    </div>
    <!-- /.container -->

  @include('layouts.footer')
  @include('layouts.formregistrousuario')
	@include('layouts.formlogin')


	@endsection
