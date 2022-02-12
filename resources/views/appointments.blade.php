@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-1/3 rounded-lg bg-white p-8 flex justify-center items-center flex-col">
            @if (count($appointmentsWithNames))
                <h2 class="text-2xl font-bold mb-4">You have appointments :</h2>
                @foreach($appointmentsWithNames as $date => $name)
                    <p>{{ $date }}</p>
                    <p>with Doctor <span class="font-bold text-lg">{{ $name }}</span></p>
                @endforeach
            @else 
                <p>There are no appointments</p>
            @endif
        </div>
    </div>
@endsection

@if (session('status'))
    @push('scripts')
        <script src="localhost:8000/resources/js/popup.js" defer></script>
    @endpush
@endif