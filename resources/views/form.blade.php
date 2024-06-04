<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
{{--<form action="/user" method="post">--}}
{{--    @if($errors->any())--}}
{{--        @foreach($errors->all() as $error)--}}
{{--            <div style="color: red">{{$error}}</div>--}}
{{--        @endforeach--}}
{{--    @endif--}}
{{--    <div style="color: red">{{$errors->first('email')}}</div>--}}
{{--    @csrf--}}
{{--    <div class="mb-3">--}}
{{--        <label for="exampleInputEmail1" class="form-label">Email address</label><span style="color: red">@error('email'){{$message}}@enderror</span>--}}
{{--        <input type="text" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="{{old('email')}}">--}}
{{--    </div>--}}
{{--    <div class="mb-3">--}}
{{--        <label for="exampleInputPassword1" class="form-label">Password</label><span style="color: red">@error('password'){{$message}}@enderror</span>--}}
{{--        <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="{{old('password')}}">--}}
{{--    </div>--}}
{{--    <div class="mb-3 form-check">--}}
{{--        <input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
{{--        <label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
{{--    </div>--}}
{{--    <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--</form>--}}
<ul class="nav">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/active">Active</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/link">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
    </li>
</ul>
<div>
    @yield('content')
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>