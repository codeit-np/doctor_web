@extends('faculty.templates.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <h3 class="mb-0">FAQ</h3>

                            </div>
                                <div class="col-12 text-right">
                                  <a href="/faqs" class="btn btn-primary btn-sm" style="background-color: #030713 !important">Back to FAQ</a>
                                </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/faq" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input id="title" class="form-control" type="text" name="title" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input id="description" class="form-control" type="text" name="description" placeholder="Description ">
                            </div>

                            <button type="submit" class="btn btn-primary btn-sm float-right" style="background-color: #030713 !important">Save</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
