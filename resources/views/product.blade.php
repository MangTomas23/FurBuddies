@extends('master')

@section('title', 'Products Page')

@section('content')

  <h1>Products Page</h1>
  @for($x=0; $x<10; $x++)
    @include('comments')
  @endfor
@endsection
