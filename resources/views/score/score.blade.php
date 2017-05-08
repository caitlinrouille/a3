@extends('layouts.master')

@section('title')
    Score Card
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-12">
        <form method="post" action="/">
            {{ csrf_field() }}
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
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="name" placeholder="Your Name" name="playerName" value='{{ old('playerName') }}' /></td>
                <td><input type="number" min="-3" max="8" name="holeOne" value='{{ old('holeOne') }}'/></td>
                <td><input type="number" min="-3" max="8" name="holeTwo" value='{{ old('holeTwo') }}'/></td>
                <td><input type="number" min="-3" max="8" name="holeThree" value='{{ old('holeThree') }}'/></td>
                <td><input type="number" min="-3" max="8" name="holeFour" value='{{ old('holeFour') }}'/></td>
                <td><input type="number" min="-3" max="8" name="holeFive" value='{{ old('holeFive') }}'/></td>
                <td><input type="number" min="-3" max="8" name="holeSix" value='{{ old('holeSix') }}'/></td>
                <td><input type="number" min="-3" max="8" name="holeSeven" value='{{ old('holeSeven') }}'/></td>
                <td><input type="number" min="-3" max="8" name="holeEight" value='{{ old('holeEight') }}'/></td>
                <td><input type="number" min="-3" max="8" name="holeNine" value='{{ old('holeNine') }}'/></td>
              </tr>
            </tbody>
          </table>
    </div>
    <div class="col-sm-12 form-group">
    <label for="course">Course Name:</label>
        <!-- <select id="courseName" name="courseName">
            <option value='choose'>
                Choose one...
            </option>
            <option value='{{ old('sandyBurr') }}'>
                Sandy Burr Country Club
            </option>
            <option value='{{ old('sassamonTrace') }}'>
                Sassamon Trace Country Club
            </option>
            <option value='{{ old('brocktonCC') }}'>
                Brockton Country Club
            </option>
        </select> -->

    </div>
    <div class="col-sm-12">
        <input name="btn_submit" type="submit" value="Calculate Score" class="btn btn-primary">
    </div>
    <div class="col-sm-12">
        @if($score)
            <div class="alert-info mg-top-20">
                <p><strong>{{$score}}</strong></p>
            </div>
        @endif
    </div>
</form>
    <div class="col-sm-12">
      <h4>Leaderboard:</h4>
    </div>
    <!-- show the errors on validate -->
    @if(count($errors) > 0)
        <ul>
            @foreach($errors->all() as $error)
            <li class="view-error">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
  </div>
@endsection
