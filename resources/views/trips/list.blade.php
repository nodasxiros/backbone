@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <button type="button"  onclick="window.location='{{ route("trips.create") }}'" class="btn btn-info">New Trip</button>
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Country</th>
                                <th scope="col">Description</th>
                                <th scope="col">Created</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($trips as $trips)
                            <tr>
                                <th scope="row">{{$trips->id}}</th>
                                <td>{{$trips->title}}</td>
                                <td>{{$trips->country}}</td>
                                <td>{{$trips->description}}</td>
                                <td>{{$trips->created_at}}</td>
                                <td><a href="{{action('TripsController@show', $trips['id'])}}" class="btn btn-warning">Show</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
