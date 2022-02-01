@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Our Facilities</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.facility')}}">Facilities</a></li>
          <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Edit Facility</h4>
                <form class="forms-sample" enctype="multipart/form-data" action="{{ route('admin.facility.update',['id'=>$facility->id]) }}" method="POST">
                    @csrf
                  <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" required class="form-control" id="name" value="{{$facility->title}}" name="title">
                  </div>
                  <div class="form-group">
                      <img src="{{asset('storage/images/facility')}}/{{$facility->image}}" alt="">
                    <label for="img">File upload</label>
                    <input type="file" required id="img" value="{{$facility->image}}" name="img" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="editor1">Description</label>
                    <textarea class="form-control" id="editor1"  name="description">{{$facility->description}}</textarea>
                  </div>
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <a href="{{route('admin.facility')}}" class="btn btn-dark">Cancel</a>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection