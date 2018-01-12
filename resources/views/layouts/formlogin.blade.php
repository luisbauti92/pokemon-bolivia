@if(Session::has('msg-error'))
<script type="text/javascript">
                                $(window).load(function(){
                                    $('#loginModal').modal('show');
                                });
                        </script>
@endif

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title">Login</h5>
            </div>

            <div class="modal-body">

                    @if(Session::has('msg-error'))
                        <div class="alert alert-danger col-xs-12">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                 <strong>Error!</strong> {{ Session::get('msg-error') }}
                        </div>

                    @endif
                {!!Form::open(['route'=>'acceder', 'method' => 'POST', 'class'=>'form-horizontal'])!!}
                    <div class="form-group">
                            {!!Form::label('username', 'Username:', ['class'=>'col-xs-3 control-label'])!!}
                        <div class="col-xs-5">
                            {!!Form::text('login', null, ['class'=>'form-control', 'placeholder'=>'Ingresa tu login'])!!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!!Form::label('password', 'Password:', ['class'=>'col-xs-3 control-label'])!!}
                        <div class="col-xs-5">
                            {!!Form::password('pass', ['class'=>'form-control', 'placeholder'=>'Ingresa tu password', 'required'=> ''])!!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-5 col-xs-offset-3">
                    {!!Form::submit('Ingresar', ['class'=>'btn btn-primary'])!!}
                    {!!Form::submit('Cancelar', ['class'=>'btn btn-danger', 'data-dismiss'=>'modal'])!!}
                    {!!Form::close()!!}
                    <a class="btn btn-link" href="login/facebook">
                      facebook
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
