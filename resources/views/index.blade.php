
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test view</title>
</head>
<body>
    {{-- @dump($users_list) --}}
    @foreach ($users_list as $user )

        {{-- @dump($user->name) --}} <br> <br>
        {{ $user->email }} <br>
        @endforeach
        <br>
        @if(true)
        bir nima
        @else
        Boshqa bir nersa
        @endif

</body>
</html>
