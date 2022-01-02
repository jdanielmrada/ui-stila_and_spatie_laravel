@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Blog</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @can('crear-blog')
                        <a href="{{ route('blogs.create') }}" class="btn btn-info">Nuevo</a>
                        @endcan

                        <table class="table table-striped mt-2">
                            <thead style="background-color: #6777ef">
                                <th style="display:none">ID</th>
                                <th style="color: blanchedalmond">Titulo</th>
                                <th style="color: blanchedalmond">Contenido</th>
                                <th style="color: blanchedalmond">Acciones</th>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                <tr>
                                    <td style="display: none">{{ $blog->id }}</td>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ $blog->content }}</td>
                                    <td>
                                        @can('editar-blog')
                                        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-warning">
                                            Editar
                                        </a>
                                        @endcan
                                        @can('borrar-rol')
                                        {!! Form::open(['method' => 'DELETE', 'route' =>
                                        ['blogs.destroy',$blog->id],'style' => 'display:inline'])!!}
                                        {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                        @endcan
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination justify-content-end">
                            {{ $blogs->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
