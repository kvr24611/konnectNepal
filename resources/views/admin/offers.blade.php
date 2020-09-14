@extends('layouts.master')

@section('title')
    Offers
@endsection


@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"> Manage Offers</h4>
      </div>
      <div class="card-body" style="padding:40px;">
        <form action="{{ action('OffersController@store') }}" method="post"> 
        @csrf
          <br>
          <div class="row">
            <div class="col-10">
              <h4>Offer Details</h4>
            </div>
            <div class="col-2">
              <button class="btn btn-primary"><i class="now-ui-icons design_bullet-list-67"></i> List Offers</button>
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="title">Offer Title:</label>
                <input type="text" class="form-control" id="title" placeholder="Title" name="title">
              </div>
              <div class="form-group">
                <label for="bandwidth">Bandwidth:</label>
                <input type="text" class="form-control" id="bandwidth" placeholder="Bandwidth" name="bandwidth">
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="cost">Cost:</label>
                <input type="text" class="form-control" id="cost" placeholder="Cost in Rs." name="cost">
              </div>
              <div class="form-group">
                <label for="date">Valid Till(yyyy-mm-dd):</label>
                <input type="date" class="form-control" id="date" value="<?php echo date('Y-m-d'); ?>" name="date">
              </div>
            </div>
          </div>

          
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection