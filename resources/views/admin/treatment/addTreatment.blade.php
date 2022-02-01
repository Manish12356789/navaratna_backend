@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Our Treatments</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.treatment')}}">Treatments</a></li>
          <li class="breadcrumb-item active" aria-current="page">Add</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Add Treatments Type</h4>
                <form class="forms-sample" enctype="multipart/form-data" action="{{ route('admin.treatment.store') }}" method="POST">
                    @csrf
                  <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" required class="form-control" id="name" placeholder="Treatment Title" name="title">
                  </div>
                  <div class="form-group">
                    <label for="img">File upload</label>
                    <input type="file" required id="img" name="img" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="short_description">Short Description</label>
                    <textarea class="form-control" id="short_description" rows="4" name="short_description"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="editor1">Description</label>
                    <textarea class="form-control" id="editor1" name="description"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <a href="{{route('admin.treatment')}}" class="btn btn-dark">Cancel</a>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection