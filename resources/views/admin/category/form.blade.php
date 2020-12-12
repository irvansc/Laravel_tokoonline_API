@extends('admin.template.master')
@section('content')
<?php
    $title = !empty($category) ? 'Update' : 'New'
?>
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                        <h2>{{ $title }} Category</h2>
                </div>
                <div class="card-body">
                    @include('admin.template.flash', ['$errors' => $errors])
                    @if (!empty($category))
                        {!! Form::model($category, ['url' => ['admin/categories', $category->id], 'method' => 'PUT']) !!}
                        {!! Form::hidden('id') !!}
                    @else
                        {!! Form::open(['url' => 'admin/categories']) !!}
                    @endif
                        <div class="form-group">
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'category name']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('parent_id', 'Parent') !!}

                            {!! General::selectMultiLevel('parent_id', $categories, ['class' => 'form-control', 'selected' => !empty(old('parent_id')) ? old('parent_id') : (!empty($category['parent_id']) ? $category['parent_id'] : ''), 'placeholder' => '-- Choose Category --']) !!}
                        </div>
                        <div class="form-footer ">
                            <button type="submit" class="btn btn-primary btn-default">Save</button>
                            <a href="{{ url('admin/categories') }}" class="btn btn-secondary btn-default">Back</a>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')


@endsection
