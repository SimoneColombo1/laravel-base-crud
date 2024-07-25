@extends('layouts.app')

@section('page-title', 'homepage')

@section('main-content')
    <div class="row justify-content-center">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>

        @endif

        <div class="col-8">
            <form action="{{ route('admin.Animals.update', $animal) }}" method="POST">
                @csrf
                @method('PUT')

                <label for="Nome"> Nome</label>

                <input type="text" id="Nome" name="Nome" class="form-control form-control-sm mb-3 mt-3"
                    value="{{ $animal->Nome }}">

                <label for="Specie"> Specie</label>
                <input type="text" id="Specie" name="Specie" class="form-control form-control-sm mb-3 mt-3"
                    value="{{ $animal->Specie }}">

                <label for="Eta"> Età</label>
                <input type="number" id="Eta" name="Eta"
                    class="form-control form-control-sm mb-3 mt-3"value="{{ $animal->ETA }}">

                <label for="DataArrivo"> Data di arrivo</label>
                <input type="text" id="DataArrivo" name="DataArrivo"
                    class="form-control form-control-sm mb-3 mt-3"value="{{ $animal->DataArrivo }}">

                <label for="Peso"> Peso</label>
                <input type="number" id="Peso" name="Peso" class="form-control form-control-sm mb-3 mt-3"
                    value="{{ $animal->Peso }}">

                <label for="Sesso"> Sesso </label>
                <input type="text" id="Sesso" name="Sesso"
                    class="form-control form-control-sm mb-3 mt-3"value="{{ $animal->Sesso }}">

                <label for="habitat"> habitat</label>
                <input type="text" id="habitat" name="habitat"
                    class="form-control form-control-sm mb-3 mt-3"value="{{ $animal->habitat }}">
                <input type="submit" class=" mb-3 mt-3 btn btn-sm btn-secondary">
            </form>

        </div>

    </div>
@endsection
