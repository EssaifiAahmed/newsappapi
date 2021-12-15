@extends('layouts.app')
@section('content')
    <div class="row">
        <form action="{{route('save-category')}}" method="POST">
            @csrf
           <div class="col-md-10 mt-4 mb-2">
                <div class="card" style="width: 408%;">
                    <div class="form-group row ml-2">
                        <label for="category_title" class="col-md-10 col-form-label">Category Title</label>
                        <div class="col-md-10">
                        <input type="text" class="form-control" id="category_title" placeholder="Category Title" name="category_title" required>
                        </div>
                    </div>
                    <div class="form-group row ml-2">
                        <label for="category_color" class="col-md-10 col-form-label">Category Color</label>
                        <div class="col-md-10">
                        <input type="color" class="form-control" id="category_color" placeholder="Category Color" name="category_color" required>
                        </div>
                    </div>
                    <div class="form-group row ml-2">
                        <label for="" class="col-md-10 col-form-label"></label>
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-primary">Save New Category</button>
                    </div>
                </div>
           </div>
        </form>
    </div>
    <div class="row">
        @foreach ($categories as $category)
            <div class="col-md-3 mt-2 mb-2">
                <div class="card">
                    <div class="card-body">
                        {{$category->title}}
                        <div style="background-color: {{$category->color}}; width: 50px; height: 25px;"></div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection