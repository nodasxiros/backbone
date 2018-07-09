@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <p>Show view</p>
            <p>{{ $destination }}</p>
            <p>{{ $desPhoto }}</p>

        </div>
    </div>
</div>
@endsection