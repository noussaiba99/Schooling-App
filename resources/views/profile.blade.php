@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User profile :</div>

                <div class="card-body">

                           <b> Etudiant : </b>     {{ Auth::user()->name }}
                           
    <form action="/profile" method="POST">
    {{ csrf_field() }}
    email : <input type="text" name="email" placeholder="email">

    groupe voulu : <input type="text" name="grpDest" placeholder="entrer le groupe voulu">
    </br>
    </br>
    <input type="submit" value="Demander permutation">

    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
