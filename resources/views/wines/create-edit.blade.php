@extends('layout.main')

@section('content')

<div class="container mb-5 ">
    <div class="row">
        <div class="col"><h1 class="mb-5">{{$title .' '.$wines?->title}}</h1></div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger " role="alert">
            <ul>
                @foreach ($errors->all() as $error )
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>

    @endif

    <div class="row">
        <div class="col">
                <form action="{{route('wines.store')}}" method="POST">
                @csrf
                @method('POST')

                    <div class="mb-3">
                        <label for="wine" class="form-label ">Nome Vino</label>
                        <input
                        type="text"
                        name="wine"
                        id="wine"
                        class="form-control @error('wine') is-invalid @enderror"
                        value="{{old('title',$wines?->wine)}}">
                        @error('title')
                            <small class="text-danger">
                                {{$message}}
                            </small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="winery" class="form-label ">Cantina</label>
                        <input
                        type="text"
                        name="winery"
                        id="winery"
                        class="form-control @error('winery') is-invalid @enderror"
                        value="{{old('winery',$wines?->winery)}}">
                        @error('winery')
                        <small class="text-danger">
                            {{$message}}
                        </small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label ">Link Immagine</label>
                        <input type="text" name="image" id="image" class="form-control" value="{{old('image',$wines?->image)}}">
                    </div>

                    <div class="mb-3">
                        <label for="location" class="form-label ">Location</label>
                        <input
                        type="text"
                        name="location"
                        id="location"
                        class="form-control @error('location') is-invalid @enderror"
                        value="{{old('location',$wines?->location)}}">
                        @error('location')
                            <small class="text-danger">
                            {{$message}}
                            </small>
                            @enderror
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-warning" id="aggiorna">{{$button}}</button>
                    </div>
                </form>
            </div>


    </div>
</div>

@endsection
