@extends('admin.template.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card ">
            <div class="card-header card-header-border-bottom d-flex justify-content-between">
                <h2>Data Category</h2>
                @can('add_categories')

            <a class="btn btn-primary" href="{{route('categories.create')}}">
                    <span class="mdi mdi-plus-circle"></span> Tambah Category</a>
                    @endcan
            </div>
            <div class="card-body">
                    <table class="table table-bordered table-hover table-responsive" id="dataTable">
                        <thead>
                            <tr>
                                <th width="10">No</th>
                                <th>Nama</th>
                                <th>Slug</th>
                                <th>Parent</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $e=>$category)
                            <tr>
                            <td>{{$e+1}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->slug}}</td>
                                <td>{{ $category->parent ? $category->parent->name : '' }}</td>
                                <td>
                                    @can('edit_categories')
                                    <a href="{{route('categories.edit',$category->id)}}" class="btm btn-warning btn-sm">
                                        <i class="mdi mdi-pencil-circle"></i>
                                        Edit</a>
                                        @endcan
                                        @can('delete_categories')
                                        {!! Form::open(['url' => 'admin/categories/'. $category->id, 'class'=> 'delete', 'style'=> 'display:inline-block']) !!}
                                        {!! Form::hidden('_method', 'DELETE') !!}
                                        {!! Form::submit('remove', ['class'=> 'btn btn-danger btn-sm']) !!}
                                        {!! Form::close() !!}
                                        @endcan
                                </td>
                            </tr>
                            @endforeach
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
