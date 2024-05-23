@extends('layout.main')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome vino</th>
        <th scope="col">Cantina</th>
        <th scope="col">Location</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($wines as $wine )

        <tr>
          <th>{{ $wine->id }}</th>
          <td>{{ $wine->wine }}</td>
          <td>{{ $wine->winery }}</td>
          <td>{{ $wine->location }}</td>
        </tr>
        @endforeach


    </tbody>
  </table>
  <div class="row">
    <div class="paginator">{{$wines->links()}}</div>
</div>

@endsection
