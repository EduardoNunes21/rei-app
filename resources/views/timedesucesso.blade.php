@extends('layouts.main')

@section('title', 'Time de Sucesso')

@section('content')

  @foreach ($data as $item)
    <tr>

        <td>Alexsandro</td>
        <td>{{$item->total1}}</td>

        <td>Daniel</td>
        <td>{{$item->total2}}</td>

        
    </tr>
  @endforeach


  @foreach ($daniel as $item)
    <tr>


        <td>Daniel</td>
        <td>{{$item->total2}}</td>

        
    </tr>
  @endforeach


@endsection