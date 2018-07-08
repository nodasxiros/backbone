@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Country</th>
                            <th scope="col">Description</th>
                            <th scope="col">Long</th>
                            <th scope="col">Lat</th>
                            <th scope="col">Created</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($destinations as $destination)
                          <tr>
                            <th scope="row">{{$destination->id}}</th>
                            <td>{{$destination->title}}</td>
                            <td>{{$destination->image}}</td>
                            <td>{{$destination->country}}</td>
                            <td>{{$destination->description}}</td>
                            <td>{{$destination->long}}</td>
                            <td>{{$destination->lat}}</td>
                            <td>{{$destination->created_at}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
