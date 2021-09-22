@extends('layouts.main')

@section('title', 'Guardiões')

@section('content')

@foreach ($guardioes as $guardiao)

<p>{{$guardiao->nome}} -- {{$guardiao->cargo}} </p>
    
@endforeach

@endsection