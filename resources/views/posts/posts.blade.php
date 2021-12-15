@extends('layouts.app')
@section('content')
    <div class="row mt-4">
        @foreach ($posts as $post)
            <div class="col-md-4 mb-2">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">{{$post->title}}</h5>
                      <a class="btn btn-light" href="{{route('show-posts',['id'=>$post->id])}}">
                      Go to Post</a>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>
    {{ $posts->links() }}
@endsection