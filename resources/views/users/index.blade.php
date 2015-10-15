@extends('layouts.master')
@section('title','Home')
@section('sidebar','Index Menu')
@section('content-name','Index')

@section('content')
    <P>This is my index screen
        My name is <span class="badge">{{$name}}</span>, I'm <span class="badge">{{$age}}</span>
    </p>
    <p>
        Sed ut <del>perspiciatis unde omnis</del> iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo
        enim ipsam <ins>voluptatem quia voluptas</ins> sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos
        qui ratione <small>voluptatem sequi nesciunt</small>. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
        consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam
        quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,
        nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse
        quam nihil
    </p>

    <p class="test">
        minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,
        nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehend
    </p>
@endsection