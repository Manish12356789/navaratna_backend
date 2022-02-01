@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Facilities </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Facilities</li>
        </ol>
      </nav>
    </div>
    <div class="row">
         <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Facilities</h4>
                    <a class="btn btn-primary float-right" href="{{route('admin.facility.add')}}">Add Type</a>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> Image </th>
                            <th> Title </th>
                            <th> Description </th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($facilities as $facility)
                            <tr>
                                <td class="py-1">
                                  <img src="{{ asset('storage/images/facilitys') }}/{{$facility->image}}" alt="image" />
                                </td>
                                <td> {{$facility->title}} </td>

                                <td>
                                    {!!$facility->description!!}
                                </td>
                                <td>
                                  <a href="{{route('admin.facility.edit', ['id'=>$facility->id])}}" class="btn btn-primary">Edit</a>
                                  <a href="{{route('admin.facility.destroy', ['id'=>$facility->id])}}" class="btn btn-danger">Delete</a>
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
