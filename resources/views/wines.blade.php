@extends('layout.main')

@section('title')
    Vini
@endsection

@section('content')
    <div class="container my-5 my-cont">
        <h1 class=" text-center text-warning">Elenco vini</h1>
        <div class="d-flex flex-wrap justify-content-around  ">

            @foreach ($wines as $item)
                <div class="card my-3" style="width: 18rem;">
                    <img src="{{ $item->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bolder">{{ $item->wine }}</h5>
                        <p class="card-text">{{ $item->winery }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $item->rating_average }}</li>
                        <li class="list-group-item">{{ $item->rating_reviews }}</li>
                        <li class="list-group-item">{{ $item->location }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link bg-dark text-white fw-bolder">Scheda vino</a>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="row">
            <div class="paginator">{{$wines->links()}}</div>
        </div>
    </div>
@endsection
