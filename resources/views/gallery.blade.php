@extends('layouts.user')
@section('title')
    Gallery   
@endsection
@section('content')
<section id="gallery">
    <div class="row">
      <div class="col-sm-12">
        <h1 class="title">Our Galleries</h1>
      </div>

      <div class="col-sm-12 tab">
        <div class="gallery_filter_tab">
            <ul>
              <li><a href="{{route('gallery')}}">All </a></li>
              @foreach ($categories as $category)
                <li><a href="{{route('gallery.filter', ['id'=>$category->id])}}">{{$category->name}}</a></li>
              @endforeach
            </ul>
          </div>
      </div>

      @foreach ($galleries as $gallery)
      <div class="container col-lg-4 col-sm-6 col-xs-12 mb-5">
        <img src="{{asset('storage/images/gallery')}}/{{$gallery->image}}" alt="" />
      </div>
      @endforeach

      {{-- <div class="container col-lg-4 col-sm-6 col-xs-12 mb-5">
        <img src="./assets/images/gallery/2.png" alt="" />
        
      </div>
      <div class="container col-lg-4 col-sm-6 col-xs-12 mb-5">
        <img src="./assets/images/gallery/3.png" alt="" />
        
      </div>
      <div class="container col-lg-4 col-sm-6 col-xs-12 mb-5">
        <img src="./assets/images/gallery/4.png" alt="" />
        
      </div>
      <div class="container col-lg-4 col-sm-6 col-xs-12 mb-5">
        <img src="./assets/images/gallery/5.png" alt="" />
        
      </div>
      <div class="container col-lg-4 col-sm-6 col-xs-12 mb-5">
        <img src="./assets/images/gallery/6.png" alt="" />
        
      </div>
      <div class="container col-lg-4 col-sm-6 col-xs-12 mb-5">
        <img src="./assets/images/gallery/7.png" alt="" />
        
      </div> <div class="container col-lg-4 col-sm-6 col-xs-12 mb-5">
        <img src="./assets/images/gallery/8.png" alt="" />
        
      </div> <div class="container col-lg-4 col-sm-6 col-xs-12 mb-5">
        <img src="./assets/images/gallery/9.png" alt="" />
        
      </div> <div class="container col-lg-4 col-sm-6 col-xs-12 mb-5">
        <img src="./assets/images/gallery/10.png" alt="" />
        
      </div> <div class="container col-lg-4 col-sm-6 col-xs-12 mb-5">
        <img src="./assets/images/gallery/11.png" alt="" />
        
      </div> <div class="container col-lg-4 col-sm-6 col-xs-12 mb-5">
        <img src="./assets/images/gallery/12.png" alt="" />
        
      </div> --}}
  </div>
  </section>
@endsection