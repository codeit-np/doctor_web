@extends('faculty.templates.app')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <div class="card-header card-header-primary" >
                            <h4 class="card-title">Hospital Management</h4>
                          </div>
                        <a href="/hospitals/create" class="btn btn-primary btn-sm float-right"style="background-color: #030731 !important">Add Hospital</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered table-striped" id="datatable">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>Hospital Name</th>
                                    <th>Telephone</th>
                                    <th>Country</th>
                                    <th>Zone</th>
                                    <th>District</th>
                                    <th>City</th>
                                    <th>Ward</th>
                                    <th>Province</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                    <th>Description</th>
                                    <th>Image</th>

                                    {{-- <th>Created_at</th> --}}
                                    {{-- <th>Updated_At</th> --}}
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($hospitals as $hospital)
                                    <tr>
                                        <td>{{ $hospital->id }}</td>
                                        <td>{{ $hospital->name }}</td>
                                        <td>{{ $hospital->telephone }}</td>
                                         <td>{{ $hospital->country }}</td>
                                         <td>{{ $hospital->zone }}</td>
                                         <td>{{ $hospital->district }}</td>
                                         <td>{{ $hospital->city }}</td>
                                         <td>{{ $hospital->ward }}</td>
                                         <td>{{ $hospital->province }}</td>
                                         <td>{{ $hospital->lat }}</td>
                                         <td>{{ $hospital->lon }}</td>
                                         <td>{{ $hospital->description }}</td>


                                        <td>
                                            <img src="{{ asset($hospital->image) }}" width="24" alt="">
                                        </td>

                                        <td>
                                            <div class="col">
                                            <a href="/hospitals/{{ $hospital->id }}/edit" class="btn btn-primary btn-sm" style="background-color: #030731 !important">Edit</a>
                                            </div>
                                            <div class="col">
                                                <a href="/hospitals/{{ $hospital->id }}" class="btn btn-primary btn-sm" >Show</a>

                                            </div>
                                            <div class="col">
                                                <form action="/hospitals/{{ $hospital->id }}" method="post">
                                                  @csrf
                                                  @method('delete')

                                                  <button type="submit" class="btn btn-primary btn-sm" style="background-color: #990008 !important">Delete</button>
                                               </form>
                                            </div>
                                        </td>
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
