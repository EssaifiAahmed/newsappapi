@extends('layouts.app')
@section('content')

    <div class="row mt-4">
        <div class="col-md-12 mb-2">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('save-post')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <center><h2 for="">Add a new post</h2></center>
                        <div class="form-group row mt-4">
                            <label for="title" class="col-md-2 col-form-label">Post title</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="title" placeholder="Post Title" name="title" required>
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <label for="content" class="col-md-2 col-form-label">Post content</label>
                            <div class="col-md-10">
                                <textarea name="content" id="content" class="form-control" cols="30" rows="10" placeholder="Post Description" required></textarea>
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <label for="post_category" class="col-md-2 col-form-label">Post category</label>
                            <div class="col-md-10">
                                <select class="form-control" name="post_category" id="post_category" required>
                                    <option selected disabled>Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <label for="post_tags" class="col-md-2 col-form-label">Post tags</label>
                            <div class="col-md-10">
                                <select class="form-control" name="post_tags[]" id="post_tags" multiple>
                                    <option selected disabled>Select Category</option>
                                    @foreach ($tags as $tag)
                                        <option value="{{$tag->id}}">{{$tag->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <label for="post_images" class="col-md-2 col-form-label">Post images</label>
                            <div class="col-md-10">
                                <input id="post_images" name="post_images[]" type="file" class="form-control" multiple>
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <label for="" class="col-md-2 col-form-label"></label>
                            <div class="col-md-10">
                                <button type="submit" class="btn btn-primary">Save New Post</button>
                        </div>

                    </form>   
                </div>
            </div>
        </div>
    </div>

@endsection