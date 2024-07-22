@extends('layouts.app')

@section('page-title', 'homepage')

@section('main-content')

  @foreach ($animals as $animal )

  {{$animal->Specie}}

  @endforeach
@endsection
