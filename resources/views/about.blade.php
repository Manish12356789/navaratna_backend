@extends('layouts.user')
@section('title')
    About Us   
@endsection
@section('content')

<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="content">
                <h2 class="title">About Us</h2>
                <h4 class="sub-title">{{$about[0]->short_description}}</h4>
                <p class="details">
                    {!! $about[0]->description !!}
                </p>
            </div>
        </div>
            <div class="col-lg-6 col-md-12 acupuncture">
              <img src="{{asset('storage/images/about_us')}}/{{$about[0]->image}}" class="img-fluid">

            </div>
        </div>
    </div>
</section>

@endsection