@extends('layouts.app')
@section('content')
    <div class="row">
        <form action="{{route('save-tag')}}" method="POST">
            @csrf
           <div class="col-md-10 mt-4 mb-2">
                <div class="card" style="width: 408%;">
                    <div class="form-group row ml-2">
                        <label for="tag_title" class="col-md-10 col-form-label">Tag</label>
                        <div class="col-md-10">
                        <input type="text" class="form-control" id="tag_title" placeholder="Tag Title" name="tag_title" required>
                        </div>
                    </div>
                    <div class="form-group row ml-2">
                        <label for="" class="col-md-10 col-form-label"></label>
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-primary">Save New Tag</button>
                    </div>
                </div>
           </div>
        </form>
    </div>
    <div class="row">
        @foreach ($tags as $tag)
            <div class="col-md-2 mt-2 mb-2">
                <div class="card">
                    <div class="card-body">
                        {{$tag->title}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection