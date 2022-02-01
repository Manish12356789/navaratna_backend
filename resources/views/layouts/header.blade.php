<header class="header-one">
    <div
      class="img"
      style="
        background-image: url({{asset('user/images/home/topbanner.png')}});
        height: 200px;
        background-size: 100% 200px;
      "
    >
      <div class="top-header">
        <div class="clearfix" style="align-items: center;
        display: flex;
    ">
          <div class="logo float-left" style="margin-left: 1rem;">
            <a href="index.html"
                  ><img
                    style="width: 200px; height: 200px"
                    src="{{asset('user/images/logo.png')}}"
                    alt=""
                /></a>
          </div>
          <div class="address-wrapper float-right">
            <ul>
              <li class="address">
                <i class="icon fas fa-map-marked"></i>
                <h6>Address:</h6>
                <p>{{$contact[0]->district}} {{$contact[0]->state}}, {{$contact[0]->country}}</p>
              </li>
              <li class="address">
                <i class="icon fas fa-envelope-open-text"></i>
                <h6>Mail us:</h6>
                <p>{{$contact[0]->email}}</p>
              </li>
            </ul>
          </div>
        </div>
        <!-- /.container -->
      </div>
      <!-- /.top-header -->
    </div>

    <div class="theme-menu-wrapper">
      <div class="">
        <div class="bg-wrapper clearfix">
          <!-- ============== Menu Warpper ================ -->
          <div class="menu-wrapper float-left">
            <nav id="mega-menu-holder" class="clearfix">
              <ul class="clearfix">
                <li class="active"><a href="{{route('home')}}">Home</a></li>
                <li>
                  <a href="{{route('about')}}">About Us</a>
                </li>
                <li>
                  <a href="#">Treatment</a>
                  <ul class="dropdown" style="padding-left: 0px; padding-right: 10px;">

                    @foreach ($treatments as $treatment)
                  <li>
                    <a href="{{route('treatment', ['treatment'=>$treatment])}}">{{$treatment->title}}</a>
                  </li>
                  @endforeach
                    {{-- <li>
                      <a href="./inner_page/sodhana.html"
                        >Sodhana Therapy (Purificatory)</a
                      >
                    </li> --}}
                  </ul>
                </li>
                <li><a href="{{route('panchakarma')}}">Panchakarma</a></li>
                {{-- <li><a href="{{route('facility')}}">Facilities</a></li> --}}
                <li><a href="{{route('gallery')}}">Gallery</a></li>
                <li><a href="{{route('contact')}}">contact</a></li>
              </ul>
            </nav>
            <!-- /#mega-menu-holder -->
          </div>
          <!-- /.menu-wrapper -->
        </div>
        <!-- /.bg-wrapper -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.theme-menu-wrapper -->
  </header>
