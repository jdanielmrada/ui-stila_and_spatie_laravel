@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Roles</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @can('crear-rol')
                        <a href="{{ route('roles.create') }}" class="btn btn-info">Nuevo</a>
                        @endcan

                        <table class="table table-striped mt-2">
                            <thead style="background-color: #6777ef">
                                <th style="display:none">ID</th>
                                <th style="color: blanchedalmond">Role</th>
                                <th style="color: blanchedalmond">Acciones</th>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                <tr>
                                    <td style="display: none">{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        @can('editar-rol')
                                        <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-warning">
                                            Editar
                                        </a>
                                        @endcan
                                        @can('borrar-rol')
                                        {!! Form::open(['method' => 'DELETE', 'route' =>
                                        ['roles.destroy',$role->id],'style' => 'display:inline'])!!}
                                        {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                        @endcan
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination justify-content-end">
                            {{ $roles->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
