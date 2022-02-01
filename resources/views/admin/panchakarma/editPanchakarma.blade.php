@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Panchakarma</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.panchakarma')}}">Panchakarma</a></li>
          <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Edit Panchakarma</h4>
                <form class="forms-sample" enctype="multipart/form-data" action="{{ route('admin.panchakarma.update',['id'=>$panchakarma->id]) }}" method="POST">
                    @csrf
                  <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" required class="form-control" id="name" value="{{$panchakarma->title}}" name="title">
                  </div>
                  <div class="form-group">
                      <img height="200" width="200" src="{{asset('storage/images/panchakarma')}}/{{$panchakarma->image}}" alt="">
                    <label for="img">File upload</label>
                    <input type="file" required id="img" value="{{$panchakarma->image}}" name="img" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="editor1">Description</label>
                    <textarea class="form-control" id="editor1"  name="description">{{$panchakarma->description}}</textarea>
                  </div>
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <a href="{{route('admin.panchakarma')}}" class="btn btn-dark">Cancel</a>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection