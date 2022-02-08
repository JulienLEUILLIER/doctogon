@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center flex-col">
        <div class="w-1/2 rounded-lg bg-white p-4 flex justify-center items-center flex-col">
            <h1 class="text-teal-500 text-5xl mb-4">Welcome to Doctogon</h1>
            <p class="text-xl mb-3">To make an appointment, please login/register</p>
            <div class="p-4">
                <a href="{{ route('login') }}" class="bg-teal-100 p-3 text-black rounded-md mr-3">
                    Login
                </a>
                <a href="{{ route('register')}}" class="bg-teal-100 p-3 text-black rounded-md">
                    Register
                </a>
            </div>
        </div>
    </div>

@endsection