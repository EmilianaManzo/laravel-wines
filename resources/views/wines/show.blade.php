@extends('layout.main')

@section('content')

<div class="container mb-1 ">

    <div class="row">
        <div class="col"><h1 class="mb-5">Dettagli</h1></div>
    </div>

    <div class="row">
        <div class="col">
            <img src="{{$wine->image}}" class="card-img-top" alt="{{$wine->wine}}">
        </div>
        <div class="col">
                  <h5 class="card-title mb-2">{{$wine->wine}}</h5>
                  <p class="card-text">{{$wine->winery}}</p>
                  <p class="card-text">{{$wine->rating_average}}</p>
                  <p class="card-text">{{$wine->rating_reviews}}</p>
                  <p class="card-text">{{$wine->location}}</p>



                <div class="d-flex mb-3">
                    <a href="{{route('wines.edit', $wine)}}" class="btn btn-warning mx-2"><i class="fa-solid fa-pencil"></i></a>
                    @include('partials.formdelete')
                    <a href="{{route('wines.index')}}" class="btn btn-success mx-2 ">Torna ai Vini</a>

                </div>


        </div>
    </div>
</div>

@endsection

@section('title')
    Details Comic
@endsection
