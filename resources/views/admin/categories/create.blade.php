@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-md-6">
                <form action="{{route('admin.categories.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                        @error('name')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <p>Choose your category's color:</p>
                        <div>
                            <input type="color" id="color" name="color">
                            <label for="head">Color</label>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Create Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
