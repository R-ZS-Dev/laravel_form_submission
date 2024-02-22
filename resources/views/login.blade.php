<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h3>User-Login</h3>

    <div>
        @if($errors->any())
        <h4>{{ $errors->first() }}</h4>
        @endif
    </div>
    <form action="{{ route('login_post_page') }}" method="POST">
        @csrf
        <label for="email">Email</label>
        <input name="email" type="email">
        <label for="password">Password</label>
        <input name="password" type="password">
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>    
       
</body>
</html>