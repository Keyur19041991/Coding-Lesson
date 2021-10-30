<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name'))</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.css" integrity="sha512-mNBK16eobgxYTbRSQhlXA6hEVqfO+o31KEctFCjcn1FytkihWQGCAB4ktjdt/NiGE6q6b09aosY0det7YQa8AA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/dropdown.css') }}" rel="stylesheet">
    @stack('css')
</head>
<body>

@yield('content')

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="{{ asset('js/dropdown.js') }}"></script>
@stack('js')
</body>
</html>
