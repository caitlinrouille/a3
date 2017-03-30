@extends('layouts.master')

@section('title')
    Bill Splitter
@endsection

@section('content')
<form method="GET" action="/bill">
    <div class="form-group">
        <label for="split">Split how many ways?</label> <input id="split" name="split" required="" type="text">
    </div>
    <div class="form-group">
        <label for="price">How much was the tab?</label> <input id="price" name="price" required="" type="text">
    </div>
    <div class="form-group">
        <label for="service">How was the service:</label> <select id="service" name="service">
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
        <label for="roundBill">Round up?</label> <input id="roundBill" name="roundBill" type="checkbox" value="checked">
    </div><input name="btn_submit" type="submit" value="Calculate Bill">
</form>

@if($billSplit)
    <div></div>
@endif

@endsection
