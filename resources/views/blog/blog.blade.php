@extends('layoutsBlog.main')
@section('container')
    <h4 class="mb-5"><strong>{{ $title }}</strong></h4>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/blog">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.. " name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)">
                            {{ $post->category->name }} </div>
                        @if ($post->image)
                            <div style="max-height:300px; overflow:hidden">
                                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid">
                            </div>
                        @else
                            <img src="https://source.unsplash.com/400x300?{{ $post->category->slug }}" class="img-fluid">
                        @endif
                        {{-- <img src="https://source.unsplash.com/300x200?{{ $post->category->slug }}" class="img-fluid" /> --}}
                        <a href="/category/{{ $post->category->slug }}">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p>Post By: <a href="/user/{{ $post->user->username }}">{{ $post->user->username }}</a>,
                            {{ $post->created_at->diffForHumans() }}</p>
                        <p class="card-text">
                            {{ $post->excerpt }}
                        </p>
                        <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@section('pagination')
    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
@endsection
@endsection
