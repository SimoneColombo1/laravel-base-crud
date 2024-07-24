@extends('layouts.app')

@section('page-title', 'homepage')

@section('main-content')
<section class="container">
<div class="col-12 text-center pl-3">
  <table class="table table-dark table-striped">
   <thead>
    <tr>
        <th>Nome</th>

        <th>Specie</th>


        <th>Età</th>


        <th>DataArrivo

        </th>


        <th>Peso</th>


        <th>Sesso</th>


        <th>habitat</th>
        <th>informazioni</th>
    </tr>
   </thead>
   <tbody>
     @foreach ($animals as $animal )
         <tr>
                <td class="table-primary">{{$animal->Nome}}</td>
                <td class="table-secondary">{{$animal->Specie}}</td>
                <td class="table-success">{{$animal->Eta}}</td>
                <td class="table-info">{{$animal->DataArrivo}}</td>
                <td class="table-light">{{$animal->Peso}}</td>
                <td class="table-danger">{{$animal->Sesso}}</td>
                <td class="table-warning">{{$animal->habitat}}</td>
                 <td><a href="{{route('admin.Animals.show',$animal)}}" class="btn btn-primary btn-small">INFO</a>
                 <a href="{{route('admin.Animals.edit',$animal)}}" class="btn btn-primary btn-small">EDIT</a>
                <form action="{{route('admin.Animals.destroy',$animal)}} " method="POST" class="d-inline-block">
                @method("DELETE")
                @csrf
                <button type="submit" class="btn btn-small btn-warning">DELETE</button>
                </form>
                </td>
         </tr>
     @endforeach


</tbody>
</table>
</div>
</section>
@endsection
