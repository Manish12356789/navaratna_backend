@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Edit Slider Image</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.sliderImage')}}">Slider</a></li>
          <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Slider Image</h4>
                <form class="forms-sample" enctype="multipart/form-data" action="{{ route('admin.slider.update', ['id'=>$image->id]) }}" method="POST">
                    @csrf
                    <div class="form-control">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" value="{{$image->name}}" class="form-control">
                    </div>
                  <div class="form-group">
                      <img height="100" width="100" src="{{asset('storage/images/slider')}}/{{$iamge->image}}" />
                    <label>Upload New Image</label>
                    <input type="file" name="img" class="form-control">
                  </div>
                  
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <a href="{{route('admin.sliderImage')}}" class="btn btn-dark">Cancel</a>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection