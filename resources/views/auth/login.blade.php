<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('bootstrap-4.0.0-dist/css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top:45px">
            <div class="col-md-4 col-md-offset-4">
                <h4>User Login</h4>
                <hr>
                <form action="{{route('auth.check')}}" method="POST">
                    @csrf
                    <div class="results">
                        @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{Session::get('fail')}}
                        </div>
                    @endif
                    </div>
                    <div class="form-group">
                        <label for="Email"></label>
                        <input type="text" class="form-control" name="email" placeholder="Enter email" value="{{old('email')}}">
                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password" >
                        <span class="text-danger">@error('password'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Login</button>
                    </div>
                    <br>
                    <a href="register">Create an new account!</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>