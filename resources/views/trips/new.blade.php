@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                <form action="/trips" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    Trip Title:
                    <br />
                    <input type="text" name="title" />
                    <br /><br />
                    Destination:
                    <br />
                    <select name="destination_id">
                        @foreach($destinations as $destination)
                        <option value="{{$destination->id}}">{{$destination->title}}</option>
                        @endforeach
                    </select>
                    <br /><br />
                    Description:
                    <br />
                    <input type="text" name="description" />
                    <br /><br />
                    Departure date:
                    <br />
                    <input type="text" name="departure_date" />
                    <br /><br />
                    Duration:
                    <br />
                    <input type="text" name="duration" />
                    <br /><br />
                    Trip photos (can attach more than one):
                    <br />
                    <input type="file" name="photos[]" multiple />
                    <br /><br />
                    <input type="submit" value="Upload" />
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection