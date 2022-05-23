@extends('layouts.main', ['activePage' => 'users', 'titlePage' => __('Usuarios')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Usuarios Registrados</h4>
                                </div>
                                <div class="card-body">
                                    @if (session('success'))
                                    <div class="alert alert-success" role="success">
                                        {{session('success')}}
                                    </div>
                                    @endif
                                    
                                    <div class="row">
                                        <div class="col-md-12 text-right">
                                            <a href="{{route('users.create')}}" class="btn btn-sm btn-facebook">Añadir usuario</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="primary text-center">
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Email</th>
                                                <th>Usuario</th>
                                                <th>Created_at</th>
                                                <th class="text-rigth">Acciones</th>
                                            </thead>
                                            <tbody class="text-center">
                                                @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $user->id }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->username }}</td>
                                                    <td>{{ $user->created_at }}</td>
                                                    <td class="td-actions">
                                                        <a href="{{route('users.show', $user->id)}}" class="btn btn-info btn-sm" type="button">
                                                            <i class="material-icons">person</i>
                                                        </a>
                                                        <a href="{{route('users.edit', $user->id)}}" class="btn btn-warning btn-sm" type="button">
                                                            <i class="material-icons">edit</i>
                                                        </a>

                                                        <form action="{{route('users.delete', $user->id)}})" method="post" style="display: inline-block" onsubmit="return confirm('¿Esta seguro que qiere eliminar?')">
                                                            @csrf
                                                            @method('DELETE')
                                                        
                                                        <button class="btn btn-danger btn-sm" type="submit">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                    </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer ml-auto">
                                    {{$users->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
@endsection