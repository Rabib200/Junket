@extends('group.master')
@section('header')
Add Feed
@endsection
@section('content')
<div class="col-md-3"></div>
<div class="col-md-6">
    <form action="{{ url('group/feed/create') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Feed Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <label>Feed Heading</label>
            <input type="text" name="heading" class="form-control">
        </div>
        <div class="form-group">
            <label>Feed Short Description</label>
            <textarea name="short_description" class="form-control mytextarea"></textarea>
        </div>
        <div class="form-group">
            <label>Feed long Description</label>
            <textarea name="long_description" class="form-control mytextarea"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Upload</button>
      </form>
</div>
<div class="col-md-3"></div>
@endsection
