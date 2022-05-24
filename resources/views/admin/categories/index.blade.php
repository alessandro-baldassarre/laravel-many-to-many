@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row  justify-content-center">

            @if (session('deleted-message'))
            <div class="col-12 alert alert-danger" role="alert">
                {{ session('deleted-message') }}
            </div>
            @endif

            @foreach ($categories as $category)

            <div class="col-md-3 my-4">
                <div class="card h-100 p-2 rounded shadow">
                    <div class="card-body text-center">
                      <p class="card-text" style="background-color: {{$category->color}}">{{$category->name}}</p>
                      <a href="{{route('admin.categories.show', $category)}}" class="btn btn-primary">Details</a>
                    </div>
                  </div>
            </div>

            @endforeach
            <div class="col-3 text-center py-3">
                {{$categories->links() }}
            </div>
        </div>
    </div>



@endsection
