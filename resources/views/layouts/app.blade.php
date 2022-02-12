<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctogon</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet"> 
    @stack('scripts')
</head>

<body class="bg-gray-200 font-display">
    <nav class="p-6 bg-teal-100 shadow-lg mb-6 flex justify-between text-xl">
        <ul class="flex">
            <li>
                <a href="{{ route('home') }}" class="p-3">Home</a>
            </li>
            <li>
                <a href="{{ route('appointments') }}" class="p-3">Appointments</a>
            </li>
            <li>
                <a href="{{ route('doctors')}}" class="p-3">Doctors</a>
            </li>
        </ul>
        <ul class="flex">
            @if (auth()->user())
            <li>
                <a href="" class="p-3">{{ auth()->user()->first_name .' '. auth()->user()->last_name }}</a>
            </li>
                        
            <li>
                <a href="{{ route('logout') }}" class="p-3">Logout</a>
            </li>
            @else
            <li>
                <a href="{{ route('login') }}" class="p-3">Login</a>
            </li>
            <li>
                <a href="{{ route('register') }}" class="p-3">Register</a>
            </li>
            @endif
        </ul>
    </nav>
    @yield('content')
</body>

</html>
