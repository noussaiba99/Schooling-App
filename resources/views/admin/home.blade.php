@extends('layouts.app')

@section('content')
<h1>Les demandes </h1>

    <ul>
        @foreach($demandes as $demande)
            <li> {{ $demande->nom }} </li>
            <li> {{ $demande->prenom }} </li>
            <li> {{ $demande->grpActuel }} </li>
            <li> {{ $demande->grpDest }} </li>
            </br></br>
        @endforeach
    </ul>
@endsection
