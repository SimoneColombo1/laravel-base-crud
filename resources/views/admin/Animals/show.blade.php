@extends('layouts.app')

@section('page-title', 'homepage')

@section('main-content')
<h1>{{$animal->Nome}} </h1>
<ul class="list-group">
<li class="list-group-item">
{{$animal->Specie}}

</li>
<li class="list-group-item">
{{$animal->Eta}}

</li>
<li class="list-group-item">
{{$animal->Sesso}}

</li>
<li class="list-group-item">
{{$animal->habitat}}

</li>
<li class="list-group-item">
    <a href="{{route('admin.Animals.index')}}" class="btn btn-primary btn-small">Torna Indietro</a>
</li>
</ul>

@endsection
