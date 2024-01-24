@extends('layouts.app')

@section('content')
    <h1>Train Schedule</h1>

    <ul>
        @foreach ($trains as $train)
            <li>{{ $train->company }} - Departure: {{ $train->departure_time }} - Arrival: {{ $train->arrival_time }}</li>
        @endforeach
    </ul>
@endsection
