@extends('dashboard.layouts.main')
@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ $post->title }}</h1>
        </div>
        @if ($post->image)
            <div style="max-height:350px; overflow:hidden">
                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3">
            </div>
        @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->slug }}" class="img-fluid mt-3">
        @endif
        {!! $post->body !!}
        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
    </main>
@endsection
