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
                        <form action="/hospitals" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Hospital Name</label>
                                <input id="name" class="form-control" type="text" name="name" placeholder="Hospital Name">
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name">Telephone</label>
                                        <input id="name" class="form-control" type="text" name="telephone" placeholder="Telephone">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name">Country</label>
                                        <input id="name" class="form-control" type="text" name="country" placeholder="Country" >
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="name">Zone</label>
                                        <input id="name" class="form-control" type="text" name="zone" placeholder="zone">
                                    </div>
                                </div>
                            </div>
                           
                           
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name">District</label>
                                        <input id="name" class="form-control" type="text" name="district" placeholder="District">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="name">City</label>
                                        <input id="name" class="form-control" type="text" name="city" placeholder="City" >
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="name">Ward</label>
                                        <input id="name" class="form-control" type="text" name="ward" placeholder="Ward" >
                                    </div>
                                </div>
                            </div>
                           
                           
                           <div class="row">
                               <div class="col">
                                    <div class="form-group">
                                        <label for="name">Province</label>
                                        <input id="name" class="form-control" type="text" name="province" placeholder="Province" >
                                    </div>
                               </div>
                               <div class="col">
                                <div class="form-group">
                                    <label for="lat">Latitude</label>
                                    <input id="lat" class="form-control" type="text" name="lat" placeholder="Latitude" >
                                </div>
                               </div>

                               <div class="col">
                                <div class="form-group">
                                    <label for="lng">Longitude</label>
                                    <input id="lng" class="form-control" type="text" name="lng" placeholder="Longitude" >
                                </div>
                               </div>
                           </div>
                            
                            
                            <div class="form-group">
                                <label for="name">Description</label>
                                <input id="name" class="form-control" type="text" name="description" placeholder="Description" >
                            </div>
                            <div class="form-group">
                                <label for="image">Feature Image</label>
                                <input type="file" class="form-control" name="image" accept="image/*">
                              </div>
                            
                              <button id="locationbtn">Current Location</button>
                              <div id="mapid"></div>

                            <button type="submit" class="btn btn-primary btn-sm float-right" style="background-color: #030731 !important">Save Details</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
