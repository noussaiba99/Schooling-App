<!--
<table>
<tr>
        <td>
        matricule 
        </td>
        <td>
        grpDest
        </td>
        <td>
        demander permutation
        </td>
        
</tr>
@foreach ($demande as $demandee)
<tr>
        <td>
         {{ $demandee->id }}
        
        </td>
        <td>
         {{ $demandee->grpDest }}
        </td>
        <td>
        <a href="/addd">demander permutation</a> 

        </td>

       
</tr>
@endforeach
</table>
--

<form action="/addd" method="POST">
    {{ csrf_field() }}
    </br>
    </br>
    Groupe voulu <input type="text" name="grpDest" placeholder="entrer le groupe voulu">
    </br>
    </br>
    <input type="submit" value="Demander permutation">

</form>-->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                user name : {{ Auth::user()->name }}

                   This is a user profile
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
