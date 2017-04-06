@extends('layouts.master')

@section('title')
    Bill Splitter
@endsection

@section('content')

<form method="post" action="/bill">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="split">Split how many ways?</label>
        <input id="split" name="split" value='{{ old('split') }}' required="" type="text">
        </div>
        <div class="form-group">
            <label for="price">How much was the tab?</label>
            <input id="price" name="price" value='{{ old('price') }}' required="" type="text">
            </div>
            <div class="form-group">
                <label for="service">How was the service:</label>
                <select id="service" name="service">
                    <option value='choose'>
                Choose one...
            </option>
                    <option value='good'>
                Good
            </option>
                    <option value='fair'>
                Fair
            </option>
                    <option value='poor'>
                Poor
            </option>
                </select>
            </div>
            <div class="form-group">
                <label for="roundBill">Round up?</label>
                <input id="roundBill" name="roundBill" type="checkbox" value="checked">
                </div>
                <input name="btn_submit" type="submit" value="Calculate Bill">
                </form>
                <!-- Show the results of the bill -->
            @if($results)
                <div class="alert-info mg-top-20">
                    {{$results}}
                </div>
            @endif

                <!-- show the errors on validate -->
            @if(count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

@endsection
