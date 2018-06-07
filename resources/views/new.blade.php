@extends('layouts.master')

@section('content')


<div class="container">

<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">New Vehicles</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->
<div class="row">
  <div class="col-md-3 col-sm-5"> 
    <!-- Side Bar start -->
    <div class="sidebar"> 
     
      
      <!-- type -->
      <div class="widget">
        <h4 class="widget-title">Car Type</h4>
        <select class="form-control">
          <option>Truck</option>
          <option>Bus</option>
        </select>
      </div>
      <!-- type end --> 
      

      
      <!-- type -->
      <!-- <div class="widget">
        <h4 class="widget-title">Condition</h4>
        <select class="form-control">
          <option>New</option>
          <option>Used Car</option>
        </select>
      </div> -->
      <!-- type end --> 

      <!-- Engine -->
      <div class="widget">
        <h4 class="widget-title">Engine Type</h4>
        <ul class="optionlist">
          <li>
            <input type="checkbox" name="checkname" id="Petrol">
            <label for="Petrol"></label>
            Petrol <span>12</span> </li>
          <li>
            <input type="checkbox" name="checkname" id="Diesel">
            <label for="Diesel"></label>
            Diesel <span>33</span> </li>
        </ul>
      </div>
      
      <!-- button -->
      <div class="searchnt">
        <button class="btn"><i class="fa fa-search" aria-hidden="true"></i> Update Results</button>
      </div>
      <!-- button end--> 
    </div>
    <!-- Side Bar end --> 
</div>

@php
  $vehicles = \App\Vehicle::where('condition', 1)->paginate(10);
@endphp

  <div class="col-md-9 col-sm-7"> 
    <!-- Search List -->
    <ul class="searchList">
      
      @foreach($vehicles as $vehicle)
      <!-- ad start -->
      <li>
        <div class="row">
          <div class="col-md-3 col-sm-4">
            <div class="adimg"><img src="images/no_image.png" alt="Ad Name"></div>
          </div>
          <div class="col-md-9 col-sm-8">
            <div class="jobinfo">
              <div class="row">
                <div class="col-md-8 col-sm-7">
                  <h3><a href="#.">{{ $vehicle->name }} for Sale</a></h3>
                  <div class="location"><i class="fa fa-heart" aria-hidden="true"></i> <span>{{ $vehicle->model }}</span></div>
                  <div class="location"><i class="fa fa-tachometer" aria-hidden="true"></i> <span>{{ $vehicle->running }} km</span></div>
                  <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>{{ $vehicle->location }}</span></div>
                  <div class="clearfix"></div>
                  <div class="vinfo"><span>Petrol</span></div>
                  <div class="vinfo"><span>{{ $vehicle->engine_cc }} cc</span></div>
                  <div class="vinfo"><span>{{ $vehicle->transmission }}</span></div>
                  <div class="clearfix"></div>
                  <div class="date">Last Updated: {{ $vehicle->created_at->diffForHumans() }}</div>
                </div>
                <div class="col-md-4 col-sm-5 text-right">
                  <div class="adprice">BDT {{ $vehicle->price }}</div>
                  <div class="listbtn"><a href="{{ route('details', ['id' => $vehicle->id ]) }}">View Details <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <!-- ad end --> 
      @endforeach
      
      <!-- ad start -->
      <!-- <li>
        <div class="row">
          <div class="col-md-3 col-sm-4">
            <div class="adimg"><img src="images/cars/05.jpg" alt="Ad Name"></div>
          </div>
          <div class="col-md-9 col-sm-8">
            <div class="jobinfo">
              <div class="row">
                <div class="col-md-8 col-sm-7">
                  <h3><a href="#.">Sue gate F 1.0 for Sale</a></h3>
                  <div class="location"><i class="fa fa-calendar" aria-hidden="true"></i> <span>2014</span></div>
                  <div class="location"><i class="fa fa-tachometer" aria-hidden="true"></i> <span>38,000 km</span></div>
                  <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>New York</span></div>
                  <div class="clearfix"></div>
                  <div class="vinfo"><span>Petrol</span></div>
                  <div class="vinfo"><span>1300 cc</span></div>
                  <div class="vinfo"><span>Automatic</span></div>
                  <div class="clearfix"></div>
                  <div class="date">Last Updated: 1 day ago</div>
                </div>
                <div class="col-md-4 col-sm-5 text-right">
                  <div class="adprice">$456.00</div>
                  <div class="listbtn"><a href="detail.html">View Details <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li> -->
      <!-- ad end --> 
     
    </ul>
    
    <!-- Pagination Start -->

     {{ $vehicles->links() }}

    <!-- <div class="pagiWrap">
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <div class="showreslt">Showing 1-10</div>
        </div>
        <div class="col-md-8 col-sm-8 text-right">
          <ul class="pagination">
            <li class="active"><a href="#.">1</a></li>
            <li><a href="#.">2</a></li>
            <li><a href="#.">3</a></li>
            <li><a href="#.">4</a></li>
            <li><a href="#.">5</a></li>
            <li><a href="#.">6</a></li>
            <li><a href="#.">7</a></li>
            <li><a href="#.">8</a></li>
          </ul>
        </div>
      </div> -->
    </div>
    <!-- Pagination end --> 
  </div>
</div>
</div>

<!-- Cars By Cities start -->
<!-- <div class="section whitebg">
  <div class="container"> 
 
    <div class="titleTop">
      <h3>Used Cars By <span>Cities</span></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc varius, orci id facilisis egestas, neque purus sagittis arcu, nec maximus quam odio nec elit Pellentesque eget ipsum mattis</p>
    </div>
 
    <div class="topsearchwrap">
      <ul class="row catelist">
        <li class="col-md-3 col-sm-6 col-xs-6"><a href="#">London <span>(96)</span></a></li>
        <li class="col-md-3 col-sm-6 col-xs-6"><a href="#">New York <span>(96)</span></a></li>
        <li class="col-md-3 col-sm-6 col-xs-6"><a href="#">Atlanta <span>(96)</span></a></li>
        <li class="col-md-3 col-sm-6 col-xs-6"><a href="#">Andalusia <span>(96)</span></a></li>
        <li class="col-md-3 col-sm-6 col-xs-6"><a href="#">Anchorage <span>(96)</span></a></li>
        <li class="col-md-3 col-sm-6 col-xs-6"><a href="#">Fairbanks <span>(96)</span></a></li>
        <li class="col-md-3 col-sm-6 col-xs-6"><a href="#">Haines <span>(96)</span></a></li>
        <li class="col-md-3 col-sm-6 col-xs-6"><a href="#">Flagstaff <span>(96)</span></a></li>
        <li class="col-md-3 col-sm-6 col-xs-6"><a href="#">Prescott <span>(96)</span></a></li>
        <li class="col-md-3 col-sm-6 col-xs-6"><a href="#">Arkadelphia <span>(96)</span></a></li>
        <li class="col-md-3 col-sm-6 col-xs-6"><a href="#">Batesville <span>(96)</span></a></li>
        <li class="col-md-3 col-sm-6 col-xs-6"><a href="#">Camden <span>(96)</span></a></li>
        <li class="col-md-3 col-sm-6 col-xs-6"><a href="#">Rancho Cucamonga <span>(96)</span></a></li>
      </ul>
    </div>
    <div class="wideBanner margintop40"><img src="images/google-ad-wide.jpg" alt=""></div>
  </div>
</div> -->
<!-- Cars By Cities ends --> 

<!--Footer-->
<div class="subscribe">
  <div class="container">
    <h6>Submit Newsletters</h6>
    <p>sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy sanctus est Lorem ipsum dolor sit amet.</p>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Enter Your Email">
          <span class="input-group-btn">
          <button class="btn btn-default" type="button">Subscrbe</button>
          </span> </div>
      </div>
    </div>
  </div>
</div>
@endsection
