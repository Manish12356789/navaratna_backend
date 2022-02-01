@extends('layouts.user')
@section('title')
    {{$treatment->title}}   
@endsection
@section('content')

<section id="treatment">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="content">
            <h2 class="title">{{$treatment->title}}</h2>
            <h4 class="sub-title">{{$treatment->short_description}}</h4>
            <p class="details">
                {!! $treatment->description !!}
            </p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 acupuncture">
          <img src="{{asset('storage/images/treatments')}}/{{$treatment->image}}" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

@endsection