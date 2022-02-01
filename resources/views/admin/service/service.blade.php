@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Services </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Services</li>
        </ol>
      </nav>
    </div>
    <div class="row">
         <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Services</h4>
                    <a class="btn btn-primary float-right" href="{{route('admin.service.add')}}">Add Type</a>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> Image </th>
                            <th> Title </th>
                            <th>Short Description</th>
                            <th> Description </th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                            <tr>
                                <td class="py-1">
                                  <img src="{{ asset('storage/images/services') }}/{{$service->image}}" alt="image" />
                                </td>
                                <td> {{$service->title}} </td>
                                <td> {{$service->short_description}} </td>

                                <td>
                                    {!!$service->description!!}
                                </td>
                                <td>
                                  <a href="{{route('admin.service.edit', ['id'=>$service->id])}}" class="btn btn-primary">Edit</a>
                                  <a href="{{route('admin.service.destroy', ['id'=>$service->id])}}" class="btn btn-danger">Delete</a>
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
