@extends('layout')

@section('title')
    Whiskers on Kittens
@endsection

@section('content')

This is the whiskers on kittens file.

@foreach ($kittens as $kitten)
    <p><img src="{{ $kitten }}" alt="Kitten!"></p>
@endforeach

@endsection
