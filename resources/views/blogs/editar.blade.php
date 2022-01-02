@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Editar Blog</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-dark alert-dismissible fade show" blog='alert'>
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

                        {!! Form::model($blog,['method' => 'PATCH', 'route' => ['blogs.update', $blog->id]]) !!}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="name">Nombre del Blog</label>
                                    {!! Form::text('title', null, array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="name">Contenido</label>
                                    {{ Form::textarea('My text', $blog->content, [
                                    'class' => 'form-control',
                                    'rows' => 1,
                                    'name' => 'content',
                                    'id' => 'txt',
                                    'onkeypress' => "return nameFunction(event);"
                                    ]) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
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
