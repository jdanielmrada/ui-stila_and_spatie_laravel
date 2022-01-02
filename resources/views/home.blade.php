@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Dashboard</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="card bg-c-blue order-card">
                                    <div class="card card-danger" style="width: 18rem;">
                                        <div class="card-body">

                                            @php
                                            use App\Models\User;
                                            $cant_usuarios = User::count();
                                            @endphp
                                            <h1 class="text-center">
                                                <i class="fa fa-users f-left">
                                                </i>
                                            </h1>
                                            <h5 class="text-center">
                                                Usuarios
                                                <span>{{ $cant_usuarios }}</span>
                                            </h5>
                                            <p class="m-b-0 text-center">
                                                <a href="/users" class="text-blue"> Ver Mas</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="card bg-c-blue order-card">
                                    <div class="card card-success" style="width: 18rem;">
                                        <div class="card-body">

                                            @php
                                            use App\Models\Blog;
                                            $cant_blogs = Blog::count();
                                            @endphp
                                            <h1 class="text-center">
                                                <i class="fa fa-th-list">
                                                </i>
                                            </h1>
                                            <h5 class="text-center">
                                                Blogs
                                                <span>{{ $cant_blogs }}</span>
                                            </h5>
                                            @can('ver-blog')
                                            <p class="m-b-0 text-center">
                                                <a href="/blogs" class="text-blue"> Ver Mas</a>
                                            </p>
                                            @endcan
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="card bg-c-blue order-card">
                                    <div class="card card-primary" style="width: 18rem;">
                                        <div class="card-body">

                                            @php
                                            use Spatie\Permission\Models\Role;
                                            $cant_roles = Role::count();
                                            @endphp
                                            <h1 class="text-center">
                                                <i class="fa fa-th-list">
                                                </i>
                                            </h1>
                                            <h5 class="text-center">
                                                Roles
                                                <span>{{ $cant_roles }}</span>
                                            </h5>
                                            @can('ver-rol')
                                            <p class="m-b-0 text-center">
                                                <a href="/roles" class="text-blue"> Ver Mas</a>
                                            </p>
                                            @endcan
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
