@extends('layouts.app')
@section('content')

    <div class="row mt-4">
        @foreach ($users as $user)
            <div class="col-md-4 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">{{$user->firstname}} {{$user->lastname}}</h2>
                        <p class="card-text">{{$user->email}}</p>
                        {{-- <p class="card-text">{{$user->avatar}}</p> --}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
    {{$users->links()}}
    
@endsection