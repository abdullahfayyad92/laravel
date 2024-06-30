<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class ="container">
        <div class="row contain">
            <div class="col-md-3">
                <form action="{{ url('postlogin') }}" method="post" class="form-group">
                    <input type="email" name="email" placeholder="email" class="form-control"> 
                    <input type="password" name="password" placeholder="password" class="form-control"> 
                    <input type="submit" value="reg" class="btn btn-success"> 
                    @csrf
                </form>
            </div>
        </div>
    </div>
</body>
</html>