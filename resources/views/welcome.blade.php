@extends('layouts.user')
@section('title')
    Home   
@endsection
@section('content')
<section>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="4000">
          <img src="{{asset('user/images/home/slider1.png')}}" class="d-block w-100" alt="...">
          {{-- <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div> --}}
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <img src="{{asset('user/images/home/slider2.png')}}" class="d-block w-100" alt="...">
          {{-- <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div> --}}
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <img src="{{asset('user/images/home/slider3.png')}}" class="d-block w-100" alt="...">
          {{-- <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div> --}}
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <section id="about-us">
    <div class="about-us-section">
      <div class="container">
        <div class="row">
          <div
            class="section-title col-12 aos-init aos-animate"
            data-aos="fade-up"
          >
            <h2><span>About </span>Us</h2>
            <p>
              <span class="sub-title_ac">Acupunture</span> for specific
              patient.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-sm-12">
            <div
              class="box-img box-shadow aos-init aos-animate"
              data-aos="fade-up"
            >
              <img class="img-fluid" src="{{asset('storage/images/about_us')}}/{{$about[0]->image}}" alt="" />
              <span
                class="section-line aos-init aos-animate"
                data-aos="fade-up"
              ></span>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 px-lg-5">
            <div class="common-cnt aos-init aos-animate" data-aos="fade-up">
              <div class="section-top">
                <p>
                  <strong class="color-defult">Navaratna Ayur</strong> is an
                  Ayurvedic Health Center established by skilled and
                  specialist doctors of Nepal.
                </p>
              </div>
              <p style="max-height: 400px; overflow:auto">
                 {!! Str::limit($about[0]->content, 100, $end='...') !!}
              </p>
              {{-- <p style="max-height: 400px; overflow:auto">
                Ayurveda is the traditioal healing mortality of the vedic
                culture with the history of more than 5000 years. Ayurveda is
                a natural approach for creating balanceamd strenghtening the
                body healing abilities. Navaratna
              </p>
              <p>
                Here with the traditional technology of Ayurveda treating all
                the diseases of the patients as well as gastric, gastric,
                pinas, obesity, pressure, diabetes, skin disease, hair loss,
                bath disease, bone feeding, nerves, headache. Special
                treatment for migraine, depression, sex power loss, piles,
                fistula, fisher etc. is done.
              </p> --}}
              <p>
                <a
                  class="btn btn-primary btn-simple btn-round margin-0 aos-init aos-animate"
                  data-aos="flip-up" href="{{route('about')}}"
                  >View More</a
                >
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section
  id="service"
  class="service-area bg-f8 animatedParent animateOnce"
>
  <div class="">
    <div class="section-title" style="background-image: url({{asset('user/images/home/service-bg.jpg')}}); background-size: cover; background-attachment: fixed;">
      <div class="row container">

        <div class="col-md-12 text-center">
          <h2>Our <span class="color-defult">Services</span></h2>
          <div class="line-border-center bg-defult"></div>
          <p>
            Health cannot be received in donation, It is to be cultivated
            from within, naturally.’ John Rusk HEALTH SCENARIO : Health is
            the first victim of Modern Life. Noise, pollution,
            adulteration and above all, the stresses and strains of modern
            life corrode the mental and physical health of city-dwellers.
          </p>
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="container"> 
      <div class="row">

        @foreach ($services as $service)   
        <div class="col-xs-12 col-md-6 col-lg-4">
          <div class="card">
            <img class="card-img-top" src="{{asset('storage/images/services')}}/{{$service->image}}" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title"><a href="{{route('service', ['id'=>$service->id])}}">{{$service->title}}</a></h4>
              <div class="border-center"></div>
              <p class="card-text">{{Str::limit($service->short_description, 20, $end='...')}}</p>
              <a href="{{route('service', ['id'=>$service->id])}}" class="btn btn-theme margin-top-20">Read More</a>
            </div>
          </div>
        </div>
        @endforeach

        {{-- <div class="col-xs-12 col-md-6 col-lg-4">
          <div class="card">
            <img class="card-img-top" src="{{asset('user/images/service/Therapy.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title"><a href="therapy.html">Therapy</a></h4>
              <div class="border-center"></div>
              <p class="card-text">Ancient, profound and effective, the field of Ayurveda is a
                millenia old tradition of being one with nature ....</p>
              <a href="therapy.html" class="btn btn-theme margin-top-20">Read More</a>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-4">
          <div class="card">
            <img class="card-img-top" src="{{asset('user/images/service/shirodhara.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title"><a href="shirodhara.html">Shirodhara</a></h4>
              <div class="border-center"></div>
              <p class="card-text"> Shirodhara is derived from the Sanskrit words ‘Shira’
                meaning head and ‘Dhara’ meaning flow ....</p>
              <a href="shirodhara.html" class="btn btn-theme margin-top-20">Read More</a>
            </div>
          </div>
        </div>
      
        <div class="col-xs-12 col-md-6 col-lg-4">
          <div class="card">
            <img class="card-img-top" src="{{asset('user/images/service/Ksharsutra.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title"><a href="ksharsutra.html"> Ksharsutra</a></h4>
              <div class="border-center"></div>
              <p class="card-text">Kshara sutra therapy is a minimal invasive Ayurvedic
                parasurgical procedure and time-tested Ayurvedic ....</p>
              <a href="ksharsutra.html" class="btn btn-theme margin-top-20">Read More</a>
            </div>
          </div>
        </div>
       
        <div class="col-xs-12 col-md-6 col-lg-4">
          <div class="card">
            <img class="card-img-top" src="{{asset('user/images/service/Acupuncture.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title"><a href="acupunture.html">Acupunture</a></h4>
              <div class="border-center"></div>
              <p class="card-text"> A system of complementary medicine in which fine needles are
                inserted in the skin at specific points ....</p>
              <a href="acupunture.html" class="btn btn-theme margin-top-20">Read More</a>
            </div>
          </div>
        </div>
      
        <div class="col-xs-12 col-md-6 col-lg-4">
          <div class="card">
            <img class="card-img-top" src="{{asset('user/images/service/Yoga.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title"><a href="yoga.html">Yoga & Pranayam</a></h4>
              <div class="border-center"></div>
              <p class="card-text">A Hindu spiritual and ascetic discipline, a part of which,
                including breath control, simple meditation ....</p>
              <a href="yoga.html" class="btn btn-theme margin-top-20">Read More</a>
            </div>
          </div>
        </div> --}}
        
      </div>
      </div>
    </div>
  </div>
</section>
@endsection