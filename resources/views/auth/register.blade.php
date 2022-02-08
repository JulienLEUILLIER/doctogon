@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-1/3 rounded-lg bg-white p-8 flex justify-center items-center flex-col">
            <form action="{{ route('register') }}" method="post" class="w-full flex justify-center items-center flex-col mb-4">
                @csrf

                <label for="first_name" class="sr-only">First name</label>
                <input type="text" name="first_name" id="first_name" class="focus: outline-none p-4 w-full rounded-lg border-2 border-teal-500 mb-4" placeholder="First name" value="{{ old('first_name')}}" />

                <label for="last_name" class="sr-only">Last name</label>
                <input type="text" name="last_name" id="last_name" class="focus: outline-none p-4 w-full rounded-lg border-2 border-teal-500 mb-4" placeholder="Last name" value="{{ old('last_name')}}" />

                <label for="email" class="sr-only">Email</label>
                <input type="text" name="email" id="email" class="focus: outline-none p-4 w-full rounded-lg border-2 border-teal-500 mb-4" placeholder="Email" value="{{ old('email')}}" />

                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" class="focus: outline-none p-4 w-full rounded-lg border-2 border-teal-500 mb-4" placeholder="Password" />

                <label for="password_confirmation" class="sr-only">Password confirmation</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="focus: outline-none p-4 w-full rounded-lg border-2 border-teal-500 mb-4" placeholder="Password confirmation" />

                <div class="w-full">
                    <input type="checkbox" name="remember" id="remember" class="mr-2" />
                    <label for="remember">Remember me</label>
                </div>

                <input type="submit" value="Register" class="bg-teal-100 p-3 text-black shadow-lg rounded-md w-1/2 mt-4 cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-150 hover:border-teal-500 hover:bg-white hover:border-2">
                
            </form>

            <p>Already have an account ? Head over to <a href="{{ route('login')}}" class="text-teal-500">login</a> page</p>
        </div>
    </div>
@endsection