@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Edit Services</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.service')}}">Service</a></li>
          <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Edit "{{route($service->title)}}" </h4>
                <form class="forms-sample" enctype="multipart/form-data" action="{{ route('admin.service.update', ['id'=>$service->id]) }}" method="POST">
                    @csrf
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" required class="form-control" id="title" value="{{$service->title}}" name="title">
                  </div>
                  <div class="form-group">
                    <img height="100" width="100" src="{{asset('storage/images/services')}}/{{$service->image}}">
                    <label>Upload New Image</label>
                    <input type="file" name="img" value="{{$service->image}}" class="form-control">
                  </div>
    
                  <div class="form-group">
                    <label for="short_description">Short Description</label>
                    <textarea class="form-control" id="short_description" rows="4" name="short_description"> {{$service->short_description}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Description</label>
                    <textarea class="form-control" id="editor1" name="discription"> {{$service->description}} </textarea>
                  </div>
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <a href="{{route('admin.service')}}" class="btn btn-dark">Cancel</a>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection