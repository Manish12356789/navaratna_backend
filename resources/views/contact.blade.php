@extends('layouts.user')
@section('title')
    Gallery
@endsection

@section('content')

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="contact_1 clearfix">

            </div>
            <div class="contact_2 clearfix">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <div class="icon-box">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="text">
                                    <span>Address: </span>
                                    {{-- Tripureshwor-11  Kathmandu, Nepal --}}
                                    {{ $contact[0]->street_name }},
                                    {{ $contact[0]->district }}-{{ $contact[0]->postal_code }},
                                    {{ $contact[0]->state }} {{ $contact[0]->country }}
                                </div>

                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <div class="icon-box">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="text">
                                    <span>Phone: </span>
                                    {{ $contact[0]->phone_number }}
                                </div>

                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <div class="icon-box">
                                <div class="icon">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                <div class="text">
                                    <span>Email: </span>
                                    {{ $contact[0]->email }}
                                </div>

                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <div class="icon-box">
                                <div class="icon">
                                    <i class="fas fa-globe-asia"></i>
                                </div>
                                <div class="text">
                               
                                        <span>Website: </span>
                                        <a href="{{route('home')}}" target="_blank"> www.navaratnaaayur.com</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12 mb-md-0 mb-5">
                    <div class="form-wrapper">
                        <form id="contact-form" name="contact-form" method="POST">

                            <!--Grid row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="title">Contact Us</h3>
                                </div>
                                <!--Grid column-->
                                <div class="col-md-12">
                                    <label for="name" class="">Your name</label>
                                    <div class="md-form mb-0">
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="Full Name">
                                    </div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-12">
                                    <label for="email" class="">Your email</label>
                                    <div class="md-form mb-0">
                                        <input type="text" id="email" name="email" class="form-control"
                                            placeholder="Email">
                                    </div>
                                </div>
                                <!--Grid column-->

                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">
                                <label for="subject" class="">Subject</label>
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <input type="text" id="subject" name="subject" class="form-control"
                                            placeholder="Subject">
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-12">
                                    <label for="message">Your message</label>
                                    <div class="md-form">
                                        <textarea type="text" id="message" name="message" rows="10"
                                            class="form-control md-textarea" placeholder="Message"></textarea>
                                    </div>

                                </div>
                            </div>
                            <!--Grid row-->


                            <div class="text-center text-md-left">
                                <button class="btn">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--Grid column-->


            </div>

            <div class="col-sm-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7065.432364501968!2d85.31023452703919!3d27.69516563086877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19ac7c7c0e35%3A0x5d153025334f3c1e!2sTripureshwor%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1641810380069!5m2!1sen!2snp"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>

@endsection
