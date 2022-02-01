@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Add About Us</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.about')}}">About Us</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add About Us</h4>
                        <form class="forms-sample" enctype="multipart/form-data"
                            action="{{ route('admin.about.store') }}" method="POST">
                            @csrf
                            
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label for="name" class="col-form-label">Name</label>
                                    <div class="">
                                        <input id="name" name="name">
                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="editor1" class=" col-form-label">Description</label>
                                    <div class="">
                                        <textarea rows="10" required cols="80" id="editor1" name="content"></textarea>
                                        
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <a href="{{route('admin.about')}}" class="btn btn-dark">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection



