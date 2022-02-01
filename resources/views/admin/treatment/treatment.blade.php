@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Treatments </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Treatments</li>
        </ol>
      </nav>
    </div>
    <div class="row">
         <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Treatments</h4>
                    <a class="btn btn-primary float-right" href="{{route('admin.treatment.add')}}">Add Type</a>
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
                            @foreach ($treatments as $treatment)
                            <tr>
                                <td class="py-1">
                                  <img src="{{ asset('storage/images/treatments') }}/{{$treatment->image}}" alt="image" />
                                </td>
                                <td> {{$treatment->title}} </td>
                                <td> {{$treatment->short_description}} </td>

                                <td>
                                    {!!$treatment->description!!}
                                </td>
                                <td>
                                  <a href="{{route('admin.treatment.edit', ['id'=>$treatment->id])}}" class="btn btn-primary">Edit</a>
                                  <a href="{{route('admin.treatment.destroy', ['id'=>$treatment->id])}}" class="btn btn-danger">Delete</a>
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
