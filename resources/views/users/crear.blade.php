@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Alta de Usuario</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-dark alert-dismissible fade show" role='alert'>
                            <strong>
                                Revise los campos ...
                            </strong>
                            @foreach ($errors->all() as $error)
                            <span class="badge badge-danger">
                                {{ $error }}
                            </span>
                            @endforeach
                            <button type="button" class="close" data-dismiss="alert" arial-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                        {!! Form::open(array('route' => 'users.store', 'method' => 'POST')) !!}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    {!! Form::text('name', null, array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="email">E-MaIL</label>
                                    {!! Form::email('email', null, array('class' => 'form-control')) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    {!! Form::password('password', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="confirm-password">Confirmar Password</label>
                                    {!! Form::password('confirm-password', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <label for="role">Role</label>
                                {!! Form::select('role[]', $roles,[], array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection