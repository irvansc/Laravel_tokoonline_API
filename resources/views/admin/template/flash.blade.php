@if ($errors->any())
    <div class="alert alert-danger alert-outlined" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li><i class="mdi mdi-alert mr-1"></i>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-primary">
        {{session('success')}}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif
