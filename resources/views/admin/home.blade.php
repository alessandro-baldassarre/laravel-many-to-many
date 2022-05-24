@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center py-5">
        <div class="col-md-2 text-center">
            <p class="mb-4">Add new Post</p>
            <a href="{{route('admin.posts.create')}}"><span class="icon-option"><i class="fa-solid fa-plus"></i></span></a>
        </div>
        <div class="col-md-2 text-center">
            <p class="mb-4">Add new Category</p>
            <a href="{{route('admin.categories.create')}}"><span class="icon-option"><i class="fa-solid fa-plus"></i></span></a>
        </div>
        <div class="col-md-2 text-center">
            <p class="mb-4">Show all Posts</p>
            <a href="{{route('admin.posts.index')}}"><span class="icon-option"><i class="fa-solid fa-eye"></i></span></a>
        </div>
        <div class="col-md-2 text-center">
            <p class="mb-4">Show all Categories</p>
            <a href="{{route('admin.categories.index')}}"><span class="icon-option"><i class="fa-solid fa-eye"></i></span></a>
        </div>
    </div>
</div>
@endsection
