@extends('frontend.layouts.master')


@section('content')
<section class="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <div class="about-me row g-2">
                <div class="banner col-md-6 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('images/personal_pic.jpg')}}" style="width: 100%; height: 50rem; object-fit: cover;" alt="banner">
                </div>
                <div class="about-content col-md-6">
                    <h3>Hi I Am Aniket Katoch</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                      et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                      accusam et justo duo dolores et ea rebum.
                      Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
                      amet.
                      , consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                      erat, sed diam voluptua. At vero eos et accusam et justo </p>
            
                    <h3>Hey there, what’s up?</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                      et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                      Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
                      amet.
                      consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                      sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                      sea takimata sanctus est Lorem ipsum dolor sit amet.
                    </p>
                    <h3>I am a social person</h3>
                    <ul class="soicel-icon">
                      <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            
        </div>
      </div>
    </div>
  </section>
@endsection