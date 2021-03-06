@extends('layouts.master')

@section('title')
    Packages
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"> Manage Packages</h4>
      </div>
      <div class="card-body" style="padding:40px;">
        <form action="#" method="post"> 
        @csrf
          <br>
          <h4>General Info</h4>
          <div class="row">
              <div class="form-group">
                <label for="fname">Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="Full Name" name="fname">
              </div>
              <div class="form-group">
                <label for="position">Position:</label>
                <input type="text" class="form-control" id="position" placeholder="Position in the Company" name="position">
              </div>
              <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" placeholder="Living Address" name="address">
              </div>
          </div>
          <br>
          <h4>Social Media</h4>
          <div class="row">
              <div class="form-group">
                <label for="fblink">Facebook:</label>
                <input type="url" class="form-control" id="fblink" placeholder="Facebook Address" name="fblink">
              </div>
              <div class="form-group">
                <label for="iglink">Instagram:</label>
                <input type="url" class="form-control" id="iglink" placeholder="Instagram Address" name="iglink">
              </div>
              <div class="form-group">
                <label for="ttlink">Twitter:</label>
                <input type="url" class="form-control" id="ttlink" placeholder="Twitter Address" name="ttlink">
              </div>
              <div class="form-group">
                <label for="lilink">LinkedIn:</label>
                <input type="url" class="form-control" id="lilink" placeholder="LinkedIn Address" name="lilink">
              </div>
          </div>
          <br>
          <h4>Photo</h4>
          <div class="row">
              <div class="form-group">
                <label for="avatar">Photo:</label>
                <input type="file" class="form-control" id="avatar" name="avatar">
              </div>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection