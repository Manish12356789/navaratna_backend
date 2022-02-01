@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">About us Content</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">About Us</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">ABout US</h4>
                @if ($contents->count() < 1)
                    <a class="btn btn-success" href="{{route('admin.profile.add')}}">Add New</a>

                @endif
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Description</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      {{-- <?php dd($contents); ?> --}}
                        
                            <tr>
                                <td style="max-width: 500px; overflow-x:scroll; height:100px;">{!! $contents->content !!}</td>
                                <td><img src="{{asset('storage/images/about_us')}}/{{$contents->image}}" height="100" width="100"></td>

                                <td>
                                    <a class="" href="{{route('admin.about.edit', ['id'=>$contents->id])}}"><i class="mdi mdi-pencil p-2"></i></a>
                                    <a class="text-danger" href="{{route('admin.about.destroy', ['id'=>$contents->id])}}"><i class="mdi mdi-delete-forever p-2"></i></a>

                                </td>
                            </tr>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>

@endsection
