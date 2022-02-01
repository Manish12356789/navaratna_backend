@extends('layouts.user')
@section('title')
    Panchakarma   
@endsection
@section('content')

<section id="panchakarma">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="editor-box">

            <p><strong>What is Panchakarma?</strong></p>
            <p>
              Whole body massage with relaxation weight maintain package, anxiety disorder , hypertention, back pain, joint pain, cervical spondylitis lumber spondylitis, degenerative diseases, migraine, sinusins, nasal allergy headache, computer vision syndrome, skin disorders etc are cured by panchakarma package.
            </p>
            <p>
                This set of five processes throws out all toxic matter from human body systems, it is like servicing and oiling the body. It is equally beneficial to ailing as well as normal bodies. The five procedures done in Panchkarma have been described here in short. It is difficult to describe the entire concept here, but the readers will be able to understand it with the information provided here.
            </p>
            <p>
                The 5 procedures are Vaman, Virechan, Basti, Nasya and Raktamokshan. Besides, other procedures mentioned in Ayurvedaa like Snehan, Swedan, Shirodhara, Katibasti, Pindswed, Pottali Swed, Pishinchal Dhara, Takradhara, Netra-tarpan, Ksharsutra, Agnikarma, Keraliya Panchakarma etc. are also performed regularly at the Arogyadham. These procedures have shown wonderful results in different diseases.
            </p>
          </div>
          </div>
          <section id="more-products">
            <h3 class="section-title">Types of Panchakarma</h3>

            <div class="row">

                @foreach ($types as $item)
                <div class="col-xs-12 col-md-6 col-lg-4 ">
                    <div class="service-item text-center style-3">
                        <div class="img-wrapper">
                            <img class="img-fuild" src="{{asset('storage/images/panchakarma')}}/{{$item->image}}" alt="">
                        </div>
                        <h4>{{$item->title}}</h4>
                        <div class="border-center"></div>
                        <p class="px-3">{!! $item->description !!}
                        </p>
                    </div>
                </div>
                @endforeach

                {{-- <div class="col-xs-12 col-md-6 col-lg-4">
                    <div class="service-item text-center style-3">
                        <div class="img-wrapper">
                            <img class="img-fuild" src="./assets/images/panchakarma/virechana_karma.png" alt="">
                        </div>
                        <h4>Virechana Karma</h4>
                        <div class="border-center"></div>
                        <p class="px-3">Therapeutic purgation for vitiated pitta doshas.

                        </p>
                       
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-4">
                    <div class="service-item text-center style-3">
                        <div class="img-wrapper">
                            <img class="img-fuild" src="./assets/images/panchakarma/vasti_karma.png" alt="">
                        </div>
                        <h4>Vasti Karma</h4>
                        <div class="border-center"></div>
                        <p class="px-3">  Medicated retention
                            Enema for vitiated
                            Vitta doshos
                            Especially in various nerve cells.
                             </p>
                       
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-4">
                    <div class="service-item text-center style-3">
                        <div class="img-wrapper">
                            <img class="img-fuild" src="./assets/images/panchakarma/nasya_karma.png" alt="">
                        </div>
                        <h4>Nasya Karma</h4>
                        <div class="border-center"></div>
                        <p class="px-3">  Medication for vitiated kapha doshas accumulated in head and neck related organs especially brain and spinal cord.
                        </p>
                       
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-4">
                    <div class="service-item text-center style-3">
                        <div class="img-wrapper">
                            <img class="img-fuild" src="./assets/images/panchakarma/rakta_mokshan.png" alt="">
                        </div>
                        <h4>Rakta Mokshan</h4>
                        <div class="border-center"></div>
                        <p class="px-3"> Blood setting to eliminate stagnant impure blood at the region. 
                        </p>
                       
                    </div>
                </div> --}}
               
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>

@endsection