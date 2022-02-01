<footer id="hs_footer">
    <div class="container-md">
      <div class="hs_footer_content">
        <div class="row">
          <div class="col-lg-5 col-md-12 col-sm-12">
            <div class="row">
              <div class="hs_footer_about_us">
                <div class="col-lg-3 col-md-4 col-sm-12 px-xs-3">
                  <h4 class="hs_heading">About Us</h4>
                  <a href="index.html"
                    ><img
                      class="img-fluid"
                      src="{{asset('user/images/logo.png')}}"
                      alt="logo"
                  /></a>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-12 hs_about_us">
                  <div class="hs_margin_60"></div>
                  <p>
                    Here with the traditional technology of Ayurveda
                    treating all the diseases of the patients as well as
                    gastric, gastric, pinas, obesity, pressure, diabetes,
                    skin disease, hair loss, bath disease, bone feeding,
                    nerves, headache. Special treatment for migraine,
                    depression, sex power loss, piles, fistula, fisher etc.
                    is done.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!--<div class="row"> -->
          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
            <div class="link-wrapper">
              <h4 class="hs_heading">Get in touch !</h4>
              <div class="hs_contact_detail">
                <p>
                  <i class="fas fa-map-marker-alt me-2"></i> {{ $contact[0]->street_name }},
                  {{ $contact[0]->district }}-{{ $contact[0]->postal_code }},
                  {{ $contact[0]->state }} {{ $contact[0]->country }}
                </p>
                <p><i class="fas fa-phone-volume me-2"></i>{{ $contact[0]->phone_number }}</p>
                <p>
                  <i class="fas fa-envelope me-2"></i>
                  {{ $contact[0]->email }}
                </p>

                <div class="clearfix"></div>
                <div class="hs_social">
                  <ul>
                    <li>
                      <a href=""><i class="fab fa-facebook-square"></i></a>
                    </li>
                    <li>
                      <a href=""><i class="fab fa-twitter-square"></i></a>
                    </li>
                    <li>
                      <a href=""
                        ><i class="fab fa-google-plus-square"></i
                      ></a>
                    </li>
                    <li>
                      <a href=""><i class="fab fa-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
            <div class="link-wrapper">
              <h4 class="hs_heading">Useful Links</h4>
              <div class="clearfix"></div>
              <div class="hs_footer_link">
                <ul>
                  <li><a href="{{route('panchakarma')}}">Panchakarma</a></li>
                  <li><a href="{{route('gallery')}}">Gallery</a></li>
                  <li><a href="{{route('facility')}}">Facilities</a></li>
                  
                  @foreach ($treatments as $treatment)
                  <li>
                    <a href="{{route('treatment', ['treatment'=>$treatment])}}">{{$treatment->title}}</a>
                  </li>
                  @endforeach

                  {{-- <li>
                    <a href="./inner_page/sodhana.html">Sodhana Therapy</a>
                  </li> --}}
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <div class="hs_copyright">
    Copyright ©
    <script>
      document.write(new Date().getFullYear());
    </script>
    Navaratna Ayur. All Rights Reserved.
  </div>