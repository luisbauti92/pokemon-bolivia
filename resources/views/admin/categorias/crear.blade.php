@extends('layouts.adminheader')
@section('title', 'Admininistrador Pokémon Bolivia')
@section('categoria', 'active')
  @section('content')
   <section class="content-header">
      <h1>
        Nuevo Registro
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i>Inicio</a></li>
        <li ><i class="fa fa-user"></i> Categorias</li>
        <li class="active">Registro de Categoria</li>
      </ol>
    </section>
    <!-- CONTENIDO -->
    <section class="content">
      <div class="row">
                @if($errors->any())
                    <div class="alert alert-danger">
                      <strong><p>Tiene los siguientes errores:</p></strong>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </div>
                @endif
                @if(Session::has('msg-ok'))
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Success!</strong> {{ Session::get('msg-ok') }}
                    </div>
                @endif
                @if(Session::has('msg-error'))
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Error!</strong> {{ Session::get('msg-ok') }}
                    </div>
                @endif
        <div class="box box-primary col-md-4">


            <div class="box-header with-border">
              <h3 class="box-title">Formulario de nuevo registro</h3>
            </div>


            {!!Form::open(['route'=>'categoria.store', 'files' => true, 'method' => 'POST', 'class'=>'form-horizontal'])!!}
                    <div class="form-group">
                            {!!Form::label('Nombre', 'Nombre:', ['class'=>'col-xs-2 control-label'])!!}
                        <div class="col-xs-8">
                            {!!Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Ingrese nombre para la categoria', 'autocomplete' => 'off'])!!}
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-xs-5 col-xs-offset-3">
                    {!!Form::submit('Registrar', ['class'=>'btn btn-primary'])!!}

                    {!!Form::close()!!}
                        </div>
                    </div>
          </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
<!-- ./wrapper -->
</div>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.3
    </div>
    <strong>Copyright &copy; 2016 <a href="http://almsaeedstudio.com">Pokémon Bolivia</a>.</strong> All rights
    reserved.
  </footer>
<!-- jQuery 2.2.0 -->
<script src="{{url('/adminis/plugins/jQuery/jQuery-2.2.0.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{url('/adminis/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- DataTables -->
<script src="{{url('/adminis/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('/adminis/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<!-- SlimScroll 1.3.0 -->
<script src="{{url('/adminis/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('/adminis/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('/adminis/dist/js/app.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('/adminis/dist/js/demo.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{url('/adminis/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>
@endsection
