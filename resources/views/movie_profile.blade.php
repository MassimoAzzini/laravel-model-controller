@extends("layouts.main")

@section("content")

    <h1 class="text-center fw-bold mt-5">{{ strtoupper($movie->title) }}</h1>

    <div class="card w-50 text-center mx-auto mt-5">
        <h3 class="card-header">
            {{ $movie->title }}
        </h3>
        <div class="card-body">
          <h5 class="card-title">{{ $movie->original_title }}</h5>
          <div class="card-text">
              <div class="card-text my-1"><span class="fw-bold">Vote:</span> {{ $movie->vote }}</div>
              <div class="card-text my-1"><span class="fw-bold">Nationality:</span> {{ ucfirst($movie->nationality) }}</div>
              <div class="card-text my-1"><span class="fw-bold">Publication Date:</span> {{ $movie->date }}</div>


          </div>
        </div>
        <div class="card-footer text-body-secondary">
            <a href="#" class="btn btn-primary mt-4">Guarda</a>
        </div>
    </div>

@endsection
