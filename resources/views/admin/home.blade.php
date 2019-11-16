@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profil</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    user name : {{ Auth::user()->name }}
                    <br>
                    <br>
                    email :  {{ Auth::user()->email}}

                        <form action="/home" method="POST">
                        {{ csrf_field() }}
                       
                        Prenom: <input type="number" name="grpDest" placeholder="entrer le groupe voulu">
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
