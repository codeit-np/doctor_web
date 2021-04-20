@extends('faculty.templates.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="/hospitals" class="btn btn-primary btn-sm float-right"style="background-color: #030731 !important">Back to Hospital Management</a>
                    </div>
                    <div class="card-body">
                        <form action="/hospitals/{{ $hospitals->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="name">Hospital Name</label>
                                <input id="name" class="form-control" type="text" name="name" placeholder="Hospital Name" value="{{ $hospitals->name }}">
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name">Telephone</label>
                                        <input id="name" class="form-control" type="text" name="telephone" placeholder="Telephone" value="{{ $hospitals->telephone }}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name">Country</label>
                                        <input id="name" class="form-control" type="text" name="country" placeholder="Country" value="{{ $hospitals->country }}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name">Zone</label>
                                        <input id="name" class="form-control" type="text" name="zone" placeholder="zone" value="{{ $hospitals->zone}}">
                                    </div>
                                </div>
                            </div>
                            
                           <div class="row">
                               <div class="col">
                                <div class="form-group">
                                    <label for="name">District</label>
                                    <input id="name" class="form-control" type="text" name="district" placeholder="District" value="{{ $hospitals->district}}">
                                </div>
                               </div>
                               <div class="col">
                                <div class="form-group">
                                    <label for="name">City</label>
                                    <input id="name" class="form-control" type="text" name="city" placeholder="City" value="{{ $hospitals->city}}">
                                </div>
                               </div>
                               
                               <div class="col">
                                <div class="form-group">
                                    <label for="name">Ward</label>
                                    <input id="name" class="form-control" type="text" name="ward" placeholder="Ward" value="{{ $hospitals->ward }}">
                                </div>
                               </div>
                           </div>
                            
                           <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name">Province</label>
                                        <input id="name" class="form-control" type="text" name="province" placeholder="Province" value="{{ $hospitals->province }}">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="lat">Latitude</label>
                                        <input id="lat" class="form-control" type="text" name="lat" placeholder="Latitude" value="{{ $hospitals->lat }}">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="lng">Longitude</label>
                                        <input id="lng" class="form-control" type="text" name="lng" placeholder="Longitude" value="{{ $hospitals->lon }}">
                                    </div>
                                </div>
                           </div>
                            
                            <div class="form-group">
                                <label for="name">Description</label>
                                <input id="name" class="form-control" type="text" name="description" placeholder="Description" value="{{ $hospitals->description }}">
                            </div>


                            <div class="form-group">
                                <label for="image">Feature Image</label>
                                <input type="file" class="form-control" name="image" accept="image/*">
                            </div>

                            <button id="locationbtn">Current Location</button>
                            <div id="mapid"></div>


                            
                            <button type="submit" class="btn btn-primary btn-sm float-right" style="background-color: #030731 !important">Update</button>

                            @foreach ($hospitals->images as $image)

                                <img src="{{ asset($image->name) }}" alt="" width="120">
                            @endforeach

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
