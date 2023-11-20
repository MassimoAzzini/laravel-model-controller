@extends("layouts.main")

@section("content")

    <h1>{{ $movie->title }}</h1>

    <div class="container d-flex flex-wrap">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text">{{ $movie->title }}</p>
                    <p class="card-text">{{ $movie->vote }}</p>
                </div>
            </div>

    </div>

@endsection
