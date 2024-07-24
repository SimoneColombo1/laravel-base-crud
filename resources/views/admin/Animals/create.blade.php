@extends('layouts.app')

@section('page-title', 'homepage')

@section('main-content')
<div class="row justify-content-center">
<div class="col-8">
<form action="{{ route('admin.Animals.store') }}" method="POST">
@csrf


<label for="Nome"> Nome</label>

<input type="text" id="Nome" name="Nome" class="form-control form-control-sm mb-3 mt-3">

<label for="Specie"> Specie</label>
<input type="text" id="Specie" name="Specie" class="form-control form-control-sm mb-3 mt-3">

<label for="Eta"> Età</label>
<input type="number" id="Eta" name="Eta" class="form-control form-control-sm mb-3 mt-3">

<label for="DataArrivo"> Data di arrivo</label>
<input type="text" id="DataArrivo" name="DataArrivo" class="form-control form-control-sm mb-3 mt-3">

<label for="Peso"> Peso</label>
<input type="number" id="Peso" name="Peso" class="form-control form-control-sm mb-3 mt-3">

<label for="Sesso"> Sesso </label>
<input type="text" id="Sesso" name="Sesso" class="form-control form-control-sm mb-3 mt-3">

<label for="habitat"> habitat</label>
<input type="text" id="habitat" name="habitat" class="form-control form-control-sm mb-3 mt-3">
<input type="submit" class=" mb-3 mt-3 btn btn-sm btn-secondary">
</form>

</div>

</div>
@endsection