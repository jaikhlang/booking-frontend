@extends('frontend.layout.frontend')

@section('title', 'Welcome' )
@section('stylesheets')
  <style>
  .select-location .card-panel{
    padding: 0px 10px!important;
    margin-top: 20px;
  }
  .select-wrapper input.select-dropdown{
    border-bottom: none!important;
  }
  .promo{
    overflow: hidden;
  }
  </style>
@endsection

@section('content')
<section>
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="{{ asset('frontend/imgs/slides/0.jpg') }}"> <!-- random image -->
        <div class="caption right-align">
          <h3>Bodo Traditional Dance</h3>
          <h5 class="light grey-text text-lighten-3">Bagurumba</h5>
        </div>
      </li>
      <li>
        <img src="{{ asset('frontend/imgs/slides/1.jpg') }}"> <!-- random image -->
        <div class="caption left-align">
          <h3>Diplai Bheel</h3>
          <h5 class="light grey-text text-lighten-3">Migratory Birds</h5>
        </div>
      </li>
      <li>
        <img src="{{ asset('frontend/imgs/slides/2.jpg') }}"> <!-- random image -->
        <div class="caption right-align">
          <h3>Bodo Traditional Dance</h3>
          <h5 class="light grey-text text-lighten-3">Dance By Bodo Women</h5>
        </div>
      </li>
      <li>
        <img src="{{ asset('frontend/imgs/slides/3.jpg') }}"> <!-- random image -->
        <div class="caption left-align">
          <h3>Diplai Bheel</h3>
          <h5 class="light grey-text text-lighten-3">Enjoy Boating</h5>
        </div>
      </li>
    </ul>
  </div>
</section>

<section class="select-location blue">
  <div class="row">
      <div class="col s12 m4 offset-m4 center">
        <div class="card-panel white">
          <form>
              <select name="location" id="location">
                <option selected="" value="kokrajhar">Kokrajhar</option>
                <option value="bongaigaon">Bongaigaon</option>
              </select>
          </form>
        </div>
      </div>
  </div>
</section>

<section class="hotel-list">
  <div class="container">
  <div class="row">
      <div class="col s12 m12">
          <h5>Hotels Available</h5>
      </div>
      <div class="col s12 m3 center">
          <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="{{ asset('frontend/imgs/hotels/gola.jpg') }}">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Omshri Hotel</span>
                <p><a class="btn blue" href="#">Book Now</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Omshri Hotel<i class="material-icons right">close</i></span>
                <p>Here is some more information about this product that is only revealed once clicked on.</p>
              </div>
          </div>
      </div>

      <div class="col s12 m3 center">
          <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="{{ asset('frontend/imgs/hotels/sevenbro.jpg') }}">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Seven Brothers</span>
                <p><a class="btn blue" href="#">Book Now</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Seven Brothers<i class="material-icons right">close</i></span>
                <p>Here is some more information about this product that is only revealed once clicked on.</p>
              </div>
          </div>
      </div>

      <div class="col s12 m3 center">
          <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="{{ asset('frontend/imgs/hotels/gola.jpg') }}">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Card Title</span>
                <p><a class="btn blue" href="#">Book Now</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                <p>Here is some more information about this product that is only revealed once clicked on.</p>
              </div>
          </div>
      </div>

      <div class="col s12 m3 center">
          <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="{{ asset('frontend/imgs/hotels/sevenbro.jpg') }}">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Card Title</span>
                <p><a class="btn blue" href="#">Book Now</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                <p>Here is some more information about this product that is only revealed once clicked on.</p>
              </div>
          </div>
      </div>
  </div>
  </div>
</section>

<section class="promo">
  <div class="row">
      <div class="col s12 m6 offset-m3 center">
          <p class="card-panel green lighten-2 z-depth-1 white-text">We can arrange your trip to the following tourist places. <span class="yellow-text">Vehicle Hiring Available.</span></p>
      </div>
  </div>
</section>

<section class="spot-list">
  <div class="container">
  <div class="row">
      <div class="col s12 m12">
          <h5>Attractions Available</h5>
      </div>
      <div class="col s12 m4 center">
          <div class="card">
              <div class="card-image">
                <img src="{{ asset('frontend/imgs/spots/manas.jpg') }}">
                <span class="card-title">Card Title</span>
              </div>
              <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
              </div>
              <div class="card-action">
                <a href="#">Visit &amp; Hire Vehicle</a>
              </div>
          </div>
      </div>

      <div class="col s12 m4 center">
          <div class="card">
              <div class="card-image">
                <img src="{{ asset('frontend/imgs/spots/chakracila.jpg') }}">
                <span class="card-title">Card Title</span>
              </div>
              <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
              </div>
              <div class="card-action">
                <a href="#">Visit &amp; Hire Vehicle</a>
              </div>
          </div>
      </div>

      <div class="col s12 m4 center">
          <div class="card">
              <div class="card-image">
                <img src="{{ asset('frontend/imgs/spots/chakracila.jpg') }}">
                <span class="card-title">Card Title</span>
              </div>
              <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
              </div>
              <div class="card-action">
                <a href="#">Visit &amp; Hire Vehicle</a>
              </div>
          </div>
      </div>
  </div>
  </div>
</section>

<section class="promo">
  <div class="row">
      <div class="col s12 m6 offset-m3 center">
          <p class="card-panel green lighten-2 z-depth-1 white-text"><span class="yellow-text">Enjoy your trip.</span> Let us take your headache from stay to transportation.</p>
      </div>
  </div>
</section>


@endsection

@section('scripts')
  <script>
      $(document).ready(function(){
      $('.slider').slider({
        indicators: false
      });
    });

    $(document).ready(function() {
      $('select').material_select();
    });
  </script>
@endsection
