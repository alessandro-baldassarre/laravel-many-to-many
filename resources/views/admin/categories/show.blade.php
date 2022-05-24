@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row p-5">
            <div class="col-12 text-center p-5">
                <div class="d-flex justify-content-center align-items-top mb-5">
                    <h1>{{ucfirst($category->name)}}</h1>
                    <span class="tag-color" style="background-color: {{$category->color}}"></span>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{route('admin.categories.edit', $category)}}" class="btn btn-warning mr-2">Edit</a>

                    <form id="myForm" action="{{route('admin.categories.destroy', $category)}}" method="POST" category-name="{{ucfirst($category->name)}}">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">
                                Delete
                            </button>
                    </form>
                </div>
            </div>
        </div>
@endsection

@section('footer-script')
    <script>
     document.getElementById("myForm").addEventListener("submit", function(e) {

        e.preventDefault();

        userConfirmation = window.confirm(`Sei sicuro di voler eliminare ${this.getAttribute('category-name')}?` );
                if (userConfirmation) {
                    this.submit();
                }

    });
    </script>
@endsection
