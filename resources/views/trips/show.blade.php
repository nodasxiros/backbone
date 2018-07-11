@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <p>Destination Details</p>
            <p>{{ $trip->title }}</p><br/>
            <p>{{ $trip->destinationName }}</p><br/>
            {{-- <p>{{ TripsController::getDestination($trip->destination_id) }}</p><br/> --}}
            <p>{{ $trip->description }}</p><br/>
            <p>{{ $trip->duration }}</p><br/>
            <p>{{ $trip->departure_date }}</p><br/>
            @foreach($trip->photos as $photo)
            <img src="/storage/{{ $photo->filename }}" class="img-fluid"/>
            @endforeach
        </div>
    </div>
</div>
@endsection