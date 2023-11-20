@extends("layouts.main")

@section("content")

    <h1 class="text-center fw-bold mt-5">Home</h1>

    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col mt-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <p class="card-text">{{ $movie->title }}</p>
                            <p class="card-text">{{ $movie->vote }}</p>
                            <a href="{{ route('detail', ['id' => $movie->id]) }}" class="btn btn-danger">Vai</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

@endsection
