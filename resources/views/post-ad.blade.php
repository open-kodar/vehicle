@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Post A Vehicle</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="{{ url('/') }}">Home</a> / <span>Post ad</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="listpgWraper">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="userccount">
          <div class="formpanel"> 
            <form action="{{ url('/post-ad') }}" method="post" >
            {{ csrf_field() }}

            <!-- Ad Information -->
            <h5>Vehicle Information</h5>
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
            <div class="row">
              <div class="col-md-12">
                <div class="formrow">
                  <input type="text" name="jobtitle" class="form-control" placeholder="Car Name" required>
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="formrow">
                  <select class="form-control" name="indus" required>
                    <option>Car type</option>
                    <option>New</option>
                    <option>Used</option>
                  </select>
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="formrow">
                  <select class="form-control" name="msalary" required>
                    <option>Select Main Catgory</option>
                    <option>Cars</option>
                    <option>Motocycle</option>
                    <option>Truck</option>
                  </select>
                </div>
              </div>
              
              <div class="col-md-4">
                <div class="formrow">
                  <select class="form-control" name="msalary">
                    <option>Select Mdel</option>
                    <option>2017</option>
                    <option>2016</option>
                    <option>2015</option>
                    <option>2014</option>
                    <option>2013</option>
                  </select>
                </div>
              </div>
             
              
              <div class="col-md-4">
                <div class="formrow">
                  <input type="text" placeholder="KM Running" class="form-control" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="formrow">
                  <select class="form-control" name="msalary">
                    <option>Transmission</option>
                    <option>Automatic</option>
                    <option>Manual</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="formrow">
                  <select class="form-control" name="msalary">
                    <option>Color</option>
                    <option>White</option>
                    <option>Black</option>
                    <option>Red</option>
                    <option>Blue</option>
                    <option>Sliver</option>
                  </select>
                </div>
              </div>
              
              <div class="col-md-4">
                <div class="formrow">
                  <input type="text" placeholder="Engine Capacity" class="form-control" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="formrow">
                  <input type="text" placeholder="Millage" class="form-control">
                </div>
              </div>
             
              <div class="col-md-4">
                <div class="formrow">
                  <input type="text" placeholder="Contact no" class="form-control" required>
                </div>
              </div>

              <div class="col-md-4">
                <div class="formrow">
                  <input type="text" name="jobtitle" class="form-control" placeholder="Ad Price">
                </div>
              </div>

              <div class="col-md-4">
                <div class="formrow">
                  <input type="text" placeholder="Location" class="form-control" required>
                </div>
              </div>
              
              <div class="col-md-12">
                <div class="formrow">
                  <div class="uploadphotobx"> <i class="fa fa-upload" aria-hidden="true"></i>
                    <h4>Upload your vehicle photo</h4>
                    <p>It must be a clear photo</p>
                    <label class="uploadBox">Click here to Upload
                      <input type="file" name="upload">
                    </label>
                  </div>
                  <div class="fileattached"> <img src="#" alt=""> <span>file-name-here.jpg</span> <i class="fa fa-check-circle" aria-hidden="true"></i>
                    <div class="clearfix"></div>
                  </div>
                 
                </div>
              </div>
              
             
              <div class="col-md-12">
                <div class="formrow">
                  <textarea class="form-control" name="jobdetail" placeholder="Seller Comments"></textarea>
                </div>
              </div>
            </div>
            <br>
            <input type="submit" class="btn" value="Post An Ad">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    </div>
</div>
@endsection
