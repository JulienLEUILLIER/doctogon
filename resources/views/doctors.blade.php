@extends('layouts.app')

@section('content')
    <div id="mainElement" class="flex justify-center flex-col items-center">
        @if ($doctors->count())
            @foreach ($doctors as $doctor)
            <div class="w-1/3 mb-4 rounded-lg bg-white p-8 flex justify-center items-center flex-col">
                <h2 class="font-bold text-2xl mb-2">Doctor {{ $doctor->name }}</h2>
                @foreach ($doctor->appointments as $appointment)
                <div class="mb-2 text-center">
                    {{ ($appointment['user_id'] === null 
                    ? 'Appointment available : ' 
                    : 'Already made appointment : ') 
                    . $appointment['date']}}
                    @if ($appointment['user_id'] === null)
                        <form method="POST" action={{ url('appointments', [$appointment->id]) }}>
                            @csrf
                            <button class="text-teal-600 font-bold transition ease-in-out duration-150 hover:scale-105" type="submit">Schedule this appointment</button>
                        </form>
                    @endif
                </div>
                @endforeach
            </div>
            @endforeach
        @else
            <p>There are no doctors available</p>
        @endif
    </div>
@endsection