@extends("layouts.main")

@section("content")

    <h1>Home</h1>

    <div class="container d-flex flex-wrap">
        @foreach ($movies as $movie)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text">{{ $movie->title }}</p>
                    <p class="card-text">{{ $movie->vote }}</p>
                    <a href="{{ route('detail', ['id' => $movie->id]) }}" class="btn btn-danger">Vai</a>
                </div>
            </div>
        @endforeach

    </div>

@endsection
