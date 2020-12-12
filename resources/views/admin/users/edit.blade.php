@extends('admin.template.master')

@section('title', 'Edit User ' . $user->first_name)

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                        <h2>Edit -  {{ $user->name }}</h2>
                </div>
                <div class="card-body">
                    {!! Form::model($user, ['method' => 'PUT', 'route' => ['users.update',  $user->id ] ]) !!}
                        @include('admin.users.form')
                        <!-- Submit Form Button -->
                        <div class="form-footer pt-5 border-top">
                        {!! Form::submit('Save Changes', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('users.index') }}" class="btn btn-secondary btn-default">Back</a>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
