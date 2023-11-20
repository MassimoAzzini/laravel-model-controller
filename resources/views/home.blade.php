@extends("layouts.main")

@section("content")

    <h1 class="text-center fw-bold mt-5">Home</h1>

    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col mt-4">
                    <div class="card cst-card" style="width: 18rem;">
                        <div class="card-body d-flex flex-column align-items-center justify-content-between">
                            <div class="text-center">
                                <p class="card-text fw-bold">{{ $movie->title }}</p>
                                <p class="card-text">
                                    <span class="fw-bold me-3">Vote:</span>{{ $movie->vote }}
                                </p>

                            </div>
                            <a href="{{ route('detail', ['id' => $movie->id]) }}" class="btn btn-danger w-50">Vai</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

@endsection
