<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="{{asset('bootstrap-4.0.0-dist/css/bootstrap.min.css')}}">
</head>
<body>
    
<div class="container">
    <div class="row" style="margin-top:45px">
        <div class="col-md-6 col-md-offset-3">
            <h4>Profile</h4>
            <table class="table table-hover">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th></th>
                </thead>
                <tbody>
                    <tr>
                        <th>{{$LoggedUserInfo->name}}</th>
                        <th>{{$LoggedUserInfo->email}}</th>
                        <th><a href="logout">Logout</a></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>