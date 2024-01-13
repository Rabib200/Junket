<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog edit</title>
</head>
<body>
    <h1>Blog Edit & Update</h1>
    <div class="col-md-3"></div>
<div class="col-md-6">
    <form action="{{ url('admin/blog/update/'.$blog->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="form-group">
            <label>Blog Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <label>Blog Heading</label>
            <input type="text" name="heading" value="{{ $blog->heading }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Blog Short Description</label>
            <textarea name="short_description" class="form-control" >{{ $blog->short_description }}</textarea>
        </div>
        <div class="form-group">
            <label>Blog long Description</label>
            <textarea name="long_description" class="form-control">{{ $blog->long_description }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
      </form>
</div>
<div class="col-md-3"></div>


</body>
</html>

