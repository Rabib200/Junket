@extends('group.master')
@section('header')
Add Blog
@endsection
@section('content')
<div class="col-md-3"></div>
<div class="col-md-6">
    <form action="{{ url('group/blog/create') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Blog Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <label>Blog Heading</label>
            <input type="text" name="heading" class="form-control">
        </div>
        <div class="form-group">
            <label>Blog Short Description</label>
            <textarea name="short_description" class="form-control mytextarea"></textarea>
        </div>
        <div class="form-group">
            <label>Blog long Description</label>
            <textarea name="long_description" class="form-control mytextarea"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Upload</button>
      </form>
</div>
<div class="col-md-3"></div>
@endsection

