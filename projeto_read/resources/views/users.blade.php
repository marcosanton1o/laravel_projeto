<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>user</h2>
    @section('content')

@foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach

@endsection
</body>
</html>

