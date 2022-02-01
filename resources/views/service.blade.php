@extends('layouts.user')
@section('title')
    {{$service->title}}   
@endsection
@section('content')

<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="content">
                <h2 class="title">{{$service->title}}</h2>
                <h4 class="sub-title">{{$service->short_description}}</h4>
                <p class="details">
                    {!! $service->description !!}
                </p>
            </div>
        </div>
            <div class="col-lg-6 col-md-12 acupuncture">
              <img src="{{asset('storage/images/services')}}/{{$service->image}}" class="img-fluid">
            </div>
        </div>
    </div>
</section>


@endsection