@extends('layouts.main', ['activePage' => 'users', 'titlePage' => __('Nuevo usuario')])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('users.store')}}"  method="post" class="form-horizontal">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <div class="card-header-primary">
                            <h4 class="card-title">Registrar usuarios</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Nombre:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre" autofocus>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="username" class="col-sm-2 col-form-label">Usuario:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="username" placeholder="Ingrese su usuario" autofocus>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="email" class="col-sm-2 col-form-label">Email:</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" name="email" placeholder="Ingrese su email" autofocus>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="password" class="col-sm-2 col-form-label">Password:</label>
                                <div class="col-sm-7">
                                    <input type="password" class="form-control" name="password" placeholder="Ingrese su Contraseña" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection