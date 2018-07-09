@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                <form action="/destinations" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    Destination Title:
                    <br />
                    <input type="text" name="title" />
                    <br /><br />
                    Country:
                    <br />
                    <input type="text" name="country" />
                    <br /><br />
                    Description:
                    <br />
                    <input type="text" name="description" />
                    <br /><br />
                    Lat:
                    <br />
                    <input type="text" name="lat" />
                    <br /><br />
                    Long:
                    <br />
                    <input type="text" name="long" />
                    <br /><br />
                    Product photos (can attach more than one):
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