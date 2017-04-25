@extends('layouts.master')

@section('title')
    Score Card
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-12">
      <table class="table">
        <thead>
          <tr>
            <th>Hole</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>
            <th>9</th>
            <th>Score</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="name" placeholder="Player 1"/></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><span></span></td>
          </tr>
           <tr>
            <td><input type="name" placeholder="Player 2"/></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><span></span></td>
          </tr>
           <tr>
            <td><input type="name" placeholder="Player 3"/></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><span></span></td>
          </tr>
           <tr>
            <td><input type="name" placeholder="Player 4"/></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><input type="number" min="-3" max="8" /></td>
            <td><span></span></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="col-sm-12">
      <p><strong>Winner is:</strong></p>
    </div>
  </div>
@endsection
