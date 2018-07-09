@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <p>Destination Details</p>
            <p>{{ $destination->title }}</p><br/>
            <p>{{ $destination->country }}</p><br/>
            <p>{{ $destination->description }}</p><br/>
            <p>{{ $destination->lat }}</p><br/>
            <p>{{ $destination->long }}</p><br/>
            @foreach($destination->photos as $photo)
            <img src="/storage/{{ $photo->filename }}"/>
            @endforeach
        </div>
    </div>
</div>
@endsection