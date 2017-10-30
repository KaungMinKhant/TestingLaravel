
@extends('layouts.master')
@section('title')
<h1>HI THERE</h1>
@section('content')
<h1>Hello World</h1>
@if (count($name) > 0)
@foreach ($name as $n)
{{ $n }} <br>
@endforeach
@else
<h1>Sorry, there is nothing to show</h1>
@endif
@endsection
@endsection