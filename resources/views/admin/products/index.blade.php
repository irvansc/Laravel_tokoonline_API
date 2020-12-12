@extends('admin.template.master')

@section('content')
        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom d-flex justify-content-between">
                        <h2>Products</h2>
                        @can('add_products')

                        <a class="btn btn-primary" href="{{ route('products.create') }}">
                            <span class="mdi mdi-plus-circle"></span> Tambah Product</a>
                        @endcan

                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-responsive" id="dataTable">
                            <thead>
                                <th>No</th>
                                <th>SKU</th>
                                <th>Type</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th style="width:15%">Action</th>
                            </thead>
                            <tbody>
                                @forelse ($products as $e=>$product)
                                    <tr>
                                        <td>{{ $e+1 }}</td>
                                        <td>{{ $product->sku }}</td>
                                        <td>{{ $product->type }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>Rp.{{ number_format($product->price) }}</td>
                                        <td>{{ $product->status_label()}}</td>
                                        <td>

                                            <a href="{{ url('admin/products/'. $product->id .'/edit') }}" class="btn btn-warning btn-sm">edit</a>
                                            @can('delete_products')
                                                {!! Form::open(['url' => 'admin/products/'. $product->id, 'class' => 'delete', 'style' => 'display:inline-block']) !!}
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
