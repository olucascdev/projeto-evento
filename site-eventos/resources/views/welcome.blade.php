@extends('layouts.main')
@section('title', 'Principal')
@section('content')
    <h1>Algum título</h1>
    <img src="/img/evento1.jpg" alt="">
    @if(10 > 15)
    <p>A condição é true</p>
    @endif

    <p>{{ $nome }}</p>

    @if($nome == "Pedro")
    <p>O nome é pedro</p>
    @elseif($nome == 'Lucas')
    <p>O nome é {{ $nome }} e ele tem {{ $idade }}</p>
    @else
    <p>O nome não é pedro</p>
    @endif


    @for($i = 0;$i < count($arr); $i++)
        <p>{{$arr[$i]}} - {{$i}}</p>
        @if($i == 2)
        <p>O i é 2</p>
        @endif
    @endfor

    @foreach($nomes as $nomes)
        <p>{{ $loop->index }}</p>
        <p>{{ $nomes }}</p>

    @endforeach
    @php
        $name = "Lucas";
        echo $name;
    @endphp

    {{-- Este é o comentario do Blade --}}
    
@endsection