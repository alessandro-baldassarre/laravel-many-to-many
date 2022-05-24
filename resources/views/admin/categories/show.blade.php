@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row p-5">
            <div class="col-12 text-center p-5">
                <h1>{{$post->title}}</h1>

                @if ($post->user->userInfo)
                    <h3>{{$post->user->userInfo->address}}</h3>
                @else
                    <h3>{{$post->user->name}}</h3>
                @endif

                <p>{{$post->description}}</p>
                <div class="d-flex justify-content-center">
                    <a href="{{route('admin.posts.edit', $post)}}" class="btn btn-warning mr-2">Edit</a>

                    <form id="myForm" action="{{route('admin.posts.destroy', $post)}}" method="POST" post-title="{{ucfirst($post->title)}}">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">
                                Delete
                            </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h5>Other Posts same Author:</h5>
                @foreach ($post->user->posts as $userPost)
                    <a href="{{route('admin.posts.show',$userPost)}}">
                        <h6>{{$userPost->title}}</h6>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('footer-script')
    <script>
     document.getElementById("myForm").addEventListener("submit", function(e) {

        e.preventDefault();

        userConfirmation = window.confirm(`Sei sicuro di voler eliminare ${this.getAttribute('post-title')}?` );
                if (userConfirmation) {
                    this.submit();
                }

    });
    </script>
@endsection
