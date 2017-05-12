@extends('layouts.master')

@section('title')
    Leaderboard
@endsection

@section('content')
  <div class="row">
  <div class="col-sm-12">
      <h4>Leaderboard:</h4>
      <table class="table table-striped">
          <thead>
            <tr>
              <th>Player Name</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($results as $result)
            <tr>
               <td>{{ $result ['full_name'] }}</td>
               <td><span class="btn btn-primary"><a href='/edit/{{ $result['id'] }}'>Edit</a></span></td>
               <td><span class="btn btn-primary"><a href='/delete/{{ $result['id'] }}'>Delete</a></span></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection
