@extends('layouts.app')

@section('content')
    <div id="mainElement" class="flex justify-center flex-col items-center">
        <div class="w-1/3 rounded-lg bg-white p-8 flex justify-center items-center flex-col">
            Dashboard
        </div>
    </div>
@endsection

@if (session('status'))
    @push('scripts')
        <script src="localhost:8000/resources/js/popup.js" defer></script>
    @endpush
@endif