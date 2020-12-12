@extends('admin.template.master')

@section('content')
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom d-flex justify-content-between">
                        <h2>Attributes</h2>
                        @can('add_attributes')
                    <div class="">
                        <a href="{{ url('admin/attributes/create') }}" class="btn btn-primary">
                            <span class="mdi mdi-plus-circle"></span> Add New</a>
                    </div>
                    @endcan
                    </div>
                    <div class="card-body">
                        @include('admin.template.flash')
                        <table class="table table-bordered table-stripped table-responsive" id="dataTable">
                            <thead>
                                <th>#</th>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @forelse ($attributes as $attribute)
                                    <tr>
                                        <td>{{ $attribute->id }}</td>
                                        <td>{{ $attribute->code }}</td>
                                        <td>{{ $attribute->name }}</td>
                                        <td>{{ $attribute->type }}</td>
                                        <td>
                                            @can('edit_attributes')
                                            <a href="{{ url('admin/attributes/'. $attribute->id .'/edit') }}" class="btn btn-warning btn-sm">edit</a>
                                            @endcan
                                            @can('add_attributes')
                                            @if ($attribute->type == 'select')
                                            <a href="{{ url('admin/attributes/'. $attribute->id .'/options') }}" class="btn btn-success btn-sm">options</a>
                                            @endif
                                            @endcan
                                            @can('delete_attributes')
                                            {!! Form::open(['url' => 'admin/attributes/'. $attribute->id, 'class' => 'delete', 'style' => 'display:inline-block']) !!}
                                            {!! Form::hidden('_method', 'DELETE') !!}
                                            {!! Form::submit('remove', ['class' => 'btn btn-danger btn-sm']) !!}
                                            {!! Form::close() !!}
                                            @endcan
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
