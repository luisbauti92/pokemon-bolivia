<style>
    body {
    padding-top: 50px;
}
.dropdown.dropdown-lg .dropdown-menu {
    margin-top: -1px;
    padding: 6px 20px;
}
.input-group-btn .btn-group {
    display: flex !important;
}
.btn-group .btn {
    border-radius: 0;
    margin-left: -1px;
}
.btn-group .btn:last-child {
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
}
.btn-group .form-horizontal .btn[type="submit"] {
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
}
.form-horizontal .form-group {
    margin-left: 0;
    margin-right: 0;
}
.form-group .form-control:last-child {
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}

@media screen and (min-width: 768px) {

    .dropdown.dropdown-lg {
        position: static !important;
    }
    .dropdown.dropdown-lg .dropdown-menu {
        min-width: 500px;
    }
}
</style>

<div class="col-md-3">
                <div class="well">
                    <h4>Buscar</h4>
                    <div class="input-group" id="adv-search">

                <div class="input-group-btn">
                    <div class="btn-group" role="group">


                         <input type="text" class="form-control" name="parametro1" placeholder="Busqueda" />

                        <div class="dropdown dropdown-lg">
                        <button type="subitm" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>

                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">


                                  <div class="form-group">
                                    <h4>Busqueda Avanzada</h4>
                                    <label for="filter">Buscar:</label>
                                    <select name="tipo" class="form-control">
                                        <option value="1">Libros</option>
                                        <option value="2" selected>Tesis</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="contain">Autor:</label>
                                    <input class="form-control" name="autor" type="text" />
                                  </div>
                                  <div class="form-group">
                                    <label for="contain">Titulo:</label>
                                    <input class="form-control" name="titulo" type="text" />
                                  </div>
                                  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
                    <!-- /.input-group -->
                </div>
                <div class="well">
                    <h4>Materias</h4>
                    <div class="row">

                        <!-- /.col-lg-6 -->
                        <div class="col-lg-12">

                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                    </div>
</div>
