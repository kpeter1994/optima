@if (\Illuminate\Support\Facades\Session::has('success'))

    <div class="alert alert-success my-3" role="alert">
        <strong>Success: </strong> {{\Illuminate\Support\Facades\Session::get('success')}}
    </div>

@endif

@if (count($errors) > 0)

    <div class="container">
        <div class="alert alert-danger my-3" role="alert">
            <strong>Errors: </strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>

@endif
