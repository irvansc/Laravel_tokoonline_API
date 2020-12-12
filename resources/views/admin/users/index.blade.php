@extends('admin.template.master')

@section('content')
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom d-flex justify-content-between">
                        <h2>Users</h2>
                        @can('add_users')
                            <a href="{{ url('admin/users/create') }}" class="btn btn-primary">
                                <span class="mdi mdi-plus-circle"></span> Add New</a>
                    @endcan
                    </div>
                    <div class="card-body">
                        @include('admin.template.flash')
                        <table class="table table-bordered table-stripped table-responsive" id="dataTable">
                            <thead>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @forelse ($users as $e=>$user)
                                    <tr>
                                        <td>{{ $e+1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->roles->implode('name', ', ') }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>
                                        @if (!$user->hasRole('Admin'))
                                            @can('edit_categories')
                                                <a href="{{ url('admin/users/'. $user->id .'/edit') }}" class="btn btn-warning btn-sm">edit</a>
                                            @endcan

                                            @can('delete_categories')
                                                {!! Form::open(['url' => 'admin/users/'. $user->id, 'class' => 'delete', 'style' => 'display:inline-block']) !!}
                                                {!! Form::hidden('_method', 'DELETE') !!}
                                                {!! Form::submit('remove', ['class' => 'btn btn-danger btn-sm']) !!}
                                                {!! Form::close() !!}
                                            @endcan
                                        @endif
                                        </td>
                                    </tr>
                                @empty

                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('js')
<script>
    $(document).ready(function(){
        $("#dataTable").DataTable()
    })

</script>
@endsection
