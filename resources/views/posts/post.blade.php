@extends('layouts.app')
@section('content')
    <div class="row mt-4">
        <div class="col-md-8 mb-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p>{{$post->content}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-2">
           @foreach ($pictures as $pic)
                <div class="card  mb-2">
                    <div class="card-body">
                        <img src="{{ asset($pic->url) }}" alt="pic's post" width="100" height="50" >
                    </div>
                </div>
           @endforeach
        </div>
        <div class="col-md-6 mb-2">
            @foreach ($videos as $vid)
                 <div class="card  mb-2">
                     <div class="card-body">
                        <img src="{{$vid->url}}" alt="pic's post" width="100" height="50" >
                        <h3>{{$vid->title}}</h3>
                        <p>{{$vid->description}}</p>
                     </div>
                 </div>
            @endforeach
         </div>
    </div>
@endsection