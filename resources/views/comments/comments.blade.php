@extends('layouts.app')
@section('content')
    <div class="row mt-4">
        @foreach ($comments as $comment)
            <div class="col-md-4 mb-2">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">{{$comment->author->firstname}} {{$comment->author->lastname}}</h5>
                      <p class="card-text">{{$comment->content}}</p>
                      <a href="{{$comment->post->link()}}" class="btn btn-primary">Go Post</a>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>
    {{ $comments->links() }}
@endsection