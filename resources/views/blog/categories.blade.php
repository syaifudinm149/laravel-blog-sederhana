@extends('layoutsBlog.main')
@section('container')
    <h4 class="mb-5"><strong>Category : All Categories</strong></h4>
    <div class="row">
        @foreach ($categories as $category)
            <div class="col-lg-3 col-md-12 mb-4">
                <div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="https://source.unsplash.com/300x200?{{ $category->slug }}" class="img-fluid" />
                        {{-- <a href="/category/{{ $category->slug }}"> --}}
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="/category/{{ $category->slug }}">
                            <h5 class="card-title">{{ $category->name }}</h5>
                        </a>
                        {{-- <a href="/category/{{ $category->slug }}" class="btn btn-primary">View More</a> --}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
