@extends('frontend.layouts.master')

@section('content')
<section class="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="contact-information">
            <h2>Contact Me</h2>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
              et dolore magna aliquyam erat, sed diam voluptua. At vero eos accusam et justo duo dolores ea rebum Stet
              clita.</p>
            <ul>
              <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                <p>Address: Lorem 142 Str., 2352, Ipsum, State, USA</p>
              </li>
              <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+33-257634 534">Phone: +33-257634 534</a>
              </li>
            </ul>
  
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="contact-form">
            <h2>Contact Form</h2>
            <form class="row" action="https://fabform.io/f/9APkcbe" method="post">
              <div class="col-md-6">
                <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Your Name">
              </div>
              <div class="col-md-6">
                <input type="email" class="form-control" name="email" id="validationCustom02" required="" placeholder="Your Email">
              </div>
              <div class="col-md-12">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"
                  placeholder="Message here…"></textarea>
              </div>
              <div class="col-md-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck">
                  <label class="form-check-label" for="gridCheck">
                    I agree that my submitted data is being collected and stored.
                  </label>
                </div>
              </div>
              <div class="col-lg-12">
                <button type="submit" class="btn btn-primary" formtarget="_blank">Send Message</button>
              </div>
            </form>
            <p class="contact-form-generator">
              <strong>** </strong> <a href="https://fabform.io/" target="_blank">Static website forms</a>
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div id="map">
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection