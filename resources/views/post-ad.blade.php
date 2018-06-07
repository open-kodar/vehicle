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
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

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
                  <input type="text" name="name" class="form-control" placeholder="Car Name" required>
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="formrow">
                  <select class="form-control" name="condition" required>
                    <option value="1">New</option>
                    <option value="0">Used</option>
                  </select>
                </div>
              </div>
              
              @php
                $types = \App\CarType::all();
              @endphp
              <div class="col-md-6">
                <div class="formrow">
                  <select class="form-control" name="type" required>
                    <option>Select vehicle type</option>
                    @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="model" class="form-control" placeholder="Vehicle Model" required>
                </div>
              </div>
             
              
              <div class="col-md-6">
                <div class="formrow">
                  <input type="number" name="running" placeholder="KM Running" class="form-control" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="formrow">
                  <select class="form-control" name="transmission">
                    <option value="Transmission">Transmission</option>
                    <option value="Automatic">Automatic</option>
                    <option value="Manual">Manual</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="formrow">
                  <select class="form-control" name="color">
                    <option value="Color">Color</option>
                    <option value="White">White</option>
                    <option value="Black">Black</option>
                    <option value="Red">Red</option>
                    <option value="Blue">Blue</option>
                    <option value="Silver">Silver</option>
                  </select>
                </div>
              </div>
              
              <div class="col-md-4">
                <div class="formrow">
                  <input type="number" name="engine_cc" placeholder="Engine CC" class="form-control" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="formrow">
                  <input type="number" name="milage" placeholder="Millage" class="form-control">
                </div>
              </div>
             
              <div class="col-md-4">
                <div class="formrow">
                  <input type="text" name="contact" placeholder="Contact no" class="form-control" required>
                </div>
              </div>

              <div class="col-md-4">
                <div class="formrow">
                  <input type="number" name="price" class="form-control" placeholder="Ad Price">
                </div>
              </div>

              <div class="col-md-4">
                <div class="formrow">
                  <input type="text" name="location" placeholder="Location" class="form-control" required>
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
                  <textarea class="form-control" name="desc" placeholder="Description"></textarea>
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
