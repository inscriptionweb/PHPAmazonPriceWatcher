@extends('layout')

@section('header')
    <title xmlns="http://www.w3.org/1999/html">Amazon Price Watcher</title>
@stop
@section('content')
<h1>Amazon Price Watcher</h1>
<form method="POST" action="/">
    {{ csrf_field() }}
    <div class="form group">
        <input type="text" name="asin" class="form-control">{{ old('asin') }}</input>
    </div>
    </br>
    <button class="btn btn-default btn-success btn-lg" type="submit">Add Item</button>
</form>

@stop

@section('footer')
    <footer><small>&copy; Stephen Moon 2016</small></footer>
@stop
