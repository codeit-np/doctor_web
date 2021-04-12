@extends('faculty.templates.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="/specialists" class="btn btn-primary btn-sm-right">Back to Specialist</a>
                    </div>
                    <div class="card-body">
                        <form action="/specialists/{{ $specialists->id }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="name">specialist Name</label>
                                <input id="name" class="form-control" type="text" name="name" placeholder="Specialist Name" value="{{ $specialists->name }}">
                            </div>
                            <div class="form-group">
                                <label for="doctor_id">Select  Specialist</label>
                                <select id="specialist_id" class="form-control" name="specialist_id">
                                    @foreach ($specialists as $specialist)
                                       <option value="{{ $specialist->id }}">{{ $specialist->name }}</option>
                                   @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image">Feature Image</label>
                                <input type="file" class="form-control" name="image" accept="image/*">
                            </div>

                            <button type="submit" class="btn btn-primary btn-sm float-right" style="background-color: #030731 !important">Update</button>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
