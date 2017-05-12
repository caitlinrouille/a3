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
            </tr>
          </thead>
          <tbody>
              @foreach($results as $result)
            <tr>
               <td>{{ $results->full_name }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection
