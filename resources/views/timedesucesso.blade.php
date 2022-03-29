@extends('layouts.main')

@section('title', 'Time de Sucesso')

@section('content')

  @foreach ($data as $item)
    <tr>

        <td>Alexsandro</td>
        <td>{{$item->total1}}</td>
        
    </tr>
  @endforeach




@endsection