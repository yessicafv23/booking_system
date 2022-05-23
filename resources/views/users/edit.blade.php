@extends('layouts.main', ['activePage' => 'users', 'titlePage' => __('Editar usuario')])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('users.update', $user->id)}}"  method="post" class="form-horizontal">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-header">
                        <div class="card-header-primary">
                            <h4 class="card-title">Editar usuario</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Nombre:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="name" value="{{$user->name}}" autofocus>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="username" class="col-sm-2 col-form-label">Usuario:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="username" value="{{$user->username}}" autofocus>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="email" class="col-sm-2 col-form-label">Email:</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" name="email" value="{{$user->email}}" autofocus>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="password" class="col-sm-2 col-form-label">Password:</label>
                                <div class="col-sm-7">
                                    <input type="password" class="form-control" name="password" placeholder="Ingrese la contraseña solo en caso de modificarla" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection