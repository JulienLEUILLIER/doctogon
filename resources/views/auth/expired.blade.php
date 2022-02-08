<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Verification</title>
</head>
<body class="bg-gray-200 flex justify-center items-center h-screen">
    <div id="mainElement" class="flex justify-center flex-col items-center">
        <div class="text-xl rounded-lg bg-white p-8 flex text-center justify-center items-center flex-col">
            Your email verification link has expired.
            <div class="text-lg mt-4">Click 
                <form class="inline" action="{{ route('verification.send') }}" method="post">
                    @csrf
                    <button class="text-teal-500 " type="submit">here</button>
                </form>                   
            to get another one</div>
        </div>
    </div>
</body>
</html>