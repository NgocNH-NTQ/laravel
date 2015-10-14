@extends('layouts.master')
@section('title','Home')

@section('content')
    <P class="bg-warning">This is my index screen
        My name is <span class="text-warning">{{$name}}</span>, I'm <span class="text-primary">{{$age}}</span>
    </p>
@endsection