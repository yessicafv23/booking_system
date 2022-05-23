@extends('layouts.main', ['activePage' => 'users', 'titlePage' => __('Detalles del usuario')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header crad-header-primary">
                            <h4 class="card-title">Vista detallada de {{$user->name}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-user">
                                        <div class="card-body">
                                            <p class="card-text">
                                                <div class="author">
                                                    <a href="#">
                                                        <img src="{{asset('/img/default-avatar.png')}}" alt="image" class="avatar">
                                                        <h5 class="title mt-3">{{$user->name}}</h5>
                                                    </a>
                                                        <p class="description">
                                                             {{ $user->username }}<br>
                                                             {{ $user->email  }}<br>
                                                             {{ $user->created_at}}
                                                        </p>
                                                </div>
                                            </p>
                                            <div class="card-description">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, perspiciatis!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="button-container">
                                <a href="{{route('users.index')}}" class="btn btn-sm btn-success mr-3">Volver</a>
                                <a href="#" class="btn btn-sm btn-primary">Editar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection