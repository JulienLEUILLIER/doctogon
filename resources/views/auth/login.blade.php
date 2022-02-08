@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-1/3 rounded-lg bg-white p-8 flex justify-center items-center flex-col">

            <form action="{{ route('login') }}" method="post" class="flex justify-center items-center flex-col w-full mb-4">
                @csrf
                <label for="email" class="sr-only">Email</label>
                <input type="text" name="email" id="email" class="focus: outline-none p-4 w-full rounded-lg border-2 border-teal-500 mb-4 @error('email') border-red-500 @enderror" placeholder="Email" value="{{ old('email')}}" />

                @error('email')
                <div class="text-red-500 text-sm mb-3">
                    {{ $message }}
                </div>
                @enderror

                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" class="focus: outline-none p-4 w-full rounded-lg border-2 border-teal-500 mb-4 @error('password') border-red-500 @enderror" placeholder="Password" />

                @error('password')
                <div class="text-red-500 text-sm mb-3">
                    {{ $message }}
                </div>
                @enderror
                <div class="w-full">
                    <input type="checkbox" name="remember" id="remember" class="mr-2" />
                    <label for="remember">Remember me</label>
                </div>

                <input type="submit" value="Login" class="shadow-lg bg-teal-100 p-3 text-black rounded-md w-1/2 mt-4 cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-150 hover:border-teal-500 hover:bg-white hover:border-2">
                
            </form>
            <p>No account ? Please <a href="{{ route('register')}}" class="text-teal-500">register</a></p>
        </div>
    </div>
@endsection