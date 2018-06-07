@extends('layouts.master')

@section('content')

<div class="listpgWraper">   
<div class="container">
  
    <div class="row">
      <div class="col-md-8"> 
        <!-- ad Description start -->
        <div class="advert-header">
          <div class="contentbox">
            <div class="adimages">
              <div id="adslider" class="flexslider">
                
              <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1200%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                  <li class="flex-active-slide" style="width: 678px; margin-right: 0px; float: left; display: block;"> <img src="images/cars/01.jpg" alt="" draggable="false"> </li>
                  <li style="width: 678px; margin-right: 0px; float: left; display: block;"> <img src="images/cars/02.jpg" alt="" draggable="false"> </li>
                  <li style="width: 678px; margin-right: 0px; float: left; display: block;"> <img src="images/cars/03.jpg" alt="" draggable="false"> </li>
                  <li style="width: 678px; margin-right: 0px; float: left; display: block;"> <img src="images/cars/04.jpg" alt="" draggable="false"> </li>
                  <li style="width: 678px; margin-right: 0px; float: left; display: block;"> <img src="images/cars/05.jpg" alt="" draggable="false"> </li>
                  <li style="width: 678px; margin-right: 0px; float: left; display: block;"> <img src="images/cars/06.jpg" alt="" draggable="false"> </li>
                </ul></div><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li><li class="flex-nav-next"><a class="flex-next" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li></ul></div>
              <div id="carousel" class="flexslider">
                
              <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1200%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                  <li class="flex-active-slide" style="width: 131.6px; margin-right: 5px; float: left; display: block;"> <img src="images/cars/01.jpg" alt="" draggable="false"> </li>
                  <li style="width: 131.6px; margin-right: 5px; float: left; display: block;"> <img src="images/cars/02.jpg" alt="" draggable="false"> </li>
                  <li style="width: 131.6px; margin-right: 5px; float: left; display: block;"> <img src="images/cars/03.jpg" alt="" draggable="false"> </li>
                  <li style="width: 131.6px; margin-right: 5px; float: left; display: block;"> <img src="images/cars/04.jpg" alt="" draggable="false"> </li>
                  <li style="width: 131.6px; margin-right: 5px; float: left; display: block;"> <img src="images/cars/05.jpg" alt="" draggable="false"> </li>
                  <li style="width: 131.6px; margin-right: 5px; float: left; display: block;"> <img src="images/cars/06.jpg" alt="" draggable="false"> </li>
                </ul></div><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li><li class="flex-nav-next"><a class="flex-next" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li></ul></div>
            </div>
            <h3>Car Features</h3>
            <ul class="row carfeature">
              <li class="col-md-4 col-sm-6"><span class="feat"><img src="images/icons/radio.png" alt=""> AM/FM Radio</span></li>
              <li class="col-md-4 col-sm-6"><span class="feat"><img src="images/icons/minisplit.png" alt=""> Air Conditioning</span></li>
              <li class="col-md-4 col-sm-6"><span class="feat"><img src="images/icons/rim.png" alt=""> Alloy Rims</span></li>
              <li class="col-md-4 col-sm-6"><span class="feat"><img src="images/icons/cd-player.png" alt=""> CD Player</span></li>
              <li class="col-md-4 col-sm-6"><span class="feat"><img src="images/icons/dvd-player.png" alt=""> DVD Player</span></li>
              <li class="col-md-4 col-sm-6"><span class="feat"><img src="images/icons/power-lock.png" alt=""> Power Locks</span></li>
            </ul>
            <h3>Description</h3>
            <p> {{ $vehicle->description }} </p></div>
        </div>
        <!-- Job Description end --> 
        
        <!-- Inspection start -->
        <div class="advert-header">
          <div class="contentbox">
            <h3>Car Inspection is Important Before buy a Used Car</h3>
            <div class="row">
              <div class="col-md-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque massa vel lorem fermentum fringilla. Pellentesque id est et neque blandit ornare malesuada a mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, quam a fringilla congue, turpis turpis molestie ligula, ut laoreet elit arcu sed nulla.</p>
              </div>
              <div class="col-md-6"><img src="images/car-inspection.jpg" alt=""></div>
            </div>
          </div>
        </div>
        
      
      </div>
      <!-- related jobs end -->
      
      <div class="col-md-4"> 
        <!-- Ad Header start -->
        <div class="jbside">
          <div class="adsalary">Price <strong>BDT {{ $vehicle->price }}</strong></div>
          <div class="ptext"><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $vehicle->created_at->diffForhumans() }}</div>
          <div class="ptext"><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $vehicle->location }}</div>
          <div class="clearfix"></div>
          <div class="adButtons"> <a href="#." class="btn apply"><i class="fa fa-phone" aria-hidden="true"></i> {{ $vehicle->contact }}</a> <a href="#." class="btn"><i class="fa fa-print" aria-hidden="true"></i> Print this Ad</a>  </div>
        </div>
        
        <!-- Job Detail start -->
        <div class="jbside">
          <h3>About This Car</h3>
          <ul class="jbdetail">

            <li class="row">
              <div class="col-md-6 col-xs-6">Vehicle Condition</div>
              <div class="col-md-6 col-xs-6"><span>@if($vehicle->condition) New @else Used @endif </span></div>
            </li>

            <li class="row">
              <div class="col-md-6 col-xs-6">Registered City</div>
              <div class="col-md-6 col-xs-6"><span>{{ $vehicle->location }}</span></div>
            </li>
            <li class="row">
              <div class="col-md-6 col-xs-6">Color</div>
              <div class="col-md-6 col-xs-6"><span>{{ $vehicle->color }}</span></div>
            </li>
            <li class="row">
              <div class="col-md-6 col-xs-6">Engine Capacity</div>
              <div class="col-md-6 col-xs-6"><span>{{ $vehicle->engine_cc }}</span></div>
            </li>
            <li class="row">
              <div class="col-md-6 col-xs-6">Model</div>
              <div class="col-md-6 col-xs-6"><span>{{ $vehicle->model }}</span></div>
            </li>
            <li class="row">
              <div class="col-md-6 col-xs-6">Millage</div>
              <div class="col-md-6 col-xs-6"><span>{{ $vehicle->running }} km</span></div>
            </li>
            <li class="row">
              <div class="col-md-6 col-xs-6">Fuel</div>
              <div class="col-md-6 col-xs-6"><span>Petrol</span></div>
            </li>
            <li class="row">
              <div class="col-md-6 col-xs-6">Transmission</div>
              <div class="col-md-6 col-xs-6"><span>{{ $vehicle->transmission }}</span></div>
            </li>
          </ul>
        </div>
    
        
        <!-- Safety start -->
        <div class="jbside">
          <h3>Stay Safe</h3>
          <div class="gmap">
            <ul class="unorderlist">
              <li>Avoid deals that are too good to be true.</li>
              <li>Deal with people in your area by meeting face to face to see the item.</li>
              <li>Never provide your personal or banking information.</li>
              <li>See our Safety tips regarding vehicle buying and selling.</li>
              <li>How to spot scam ads?</li>
              <li>How to protect yourself?</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    </div>
</div>
@endsection

