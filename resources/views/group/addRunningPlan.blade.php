@extends('group.master')
@section('header')
Add Running Plan
@endsection
@section('content')
<div class="col-md-3"></div>
<div class="col-md-6">
    <form action="{{ url('group/running/plan/create') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Location</label>
            <input type="text" name="location" class="form-control">
        </div>
        <div class="form-group">
            <label>Short Description</label>
            <textarea name="short_description" class="form-control mytextarea"></textarea>
        </div>
        <div class="form-group">
            <label>long Description</label>
            <textarea name="long_description" class="form-control mytextarea"></textarea>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <label>Cost Description</label>
            <textarea name="cost_description" class="form-control mytextarea"></textarea>
        </div>
        <div class="form-group">
            <label>Total Cost</label>
            <input type="number" name="total_cost" class="form-control">
        </div>
        <div class="form-group">
            <label>Booking Cost</label>
            <input type="number" name="booking_cost" class="form-control">
        </div>
        <div class="form-group">
            <label>Capacity</label>
            <input type="number" name="capacity" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Upload</button>
      </form>
</div>
<div class="col-md-3"></div>
@endsection
