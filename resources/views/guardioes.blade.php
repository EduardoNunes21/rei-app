@extends('layouts.main')

@section('title', 'Guardiões')

@section('content')

@foreach ($guardioes as $guardiao)

<p>{{$guardiao->nome}} -- {{$guardiao->cargo}} </p>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Cargo</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Estágio</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>{{$guardiao->nome}}</td>
      <td>{{$guardiao->cargo}}</td>
      <td>{{$guardiao->dataNascimento}}</td>
      <td>{{$guardiao->estagio}}</td>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
    
@endforeach

@endsection