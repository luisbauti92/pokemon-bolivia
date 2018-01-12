@extends('layouts.adminheader')
@section('usuario', 'active')
@section('title', 'Admininistrador EAEN')
  @section('content')
   <section class="content-header">

      <h1>
        Usuarios

      </h1>
@if(Session::has('msg-ok'))
                        <div class="alert alert-warning col-xs-12">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                 <strong>Atención!</strong> {{ Session::get('msg-ok') }}
                        </div>
          @endif
      <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i>Inicio</a></li>
        <li ><i class="fa fa-user"></i> Usuarios</li>
        <li class="active">Listado de usuarios</li>
      </ol>
    </section>
  <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listado de usuarios </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Nombres</th>
                  <th>Nick Name</th>
                  <th>Email</th>
                  <th>Estado</th>
                  <th>Tipo</th>
                  <th>FC</th>
                  <th>Perfil</th>
                  <th>Fecha Creación</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($usuarios as $u)
                  <tr>
                    <td>{{$u->id}}</td>
                    <td>{{$u->nombre}}</td>
                    <td>{{$u->nickname}}</td>
                    <td>{{$u->email}}</td>
                    <td>{{$u->estado}}</td>
                    <td>{{$u->tipo}}</td>
                    <td>{{$u->fc}}</td>
                    <td><a href="{{$u->account->urlperfil}}" target="_blank">{{$u->nickname}}</a></td>
                    <td>{{$u->created_at}}</td>
                    <td>hola</td>
                  </tr>
                @endforeach
                </tbody>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- ENDBOX -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
<!-- ./wrapper -->

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

<script>
  $(document).ready(function() {
    $('#example1').DataTable();
} );
</script>
<script language="JavaScript">
function pregunta(){
    if (confirm('¿Estas seguro de eliminar esta tesis?')){
       document.tuformulario.submit()
    }else{
        return false;
    }
}
</script>
@endsection
