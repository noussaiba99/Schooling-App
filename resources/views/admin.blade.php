<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="py-4">


        <div class="container">

            <h1>List of requests</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col"> # </th>
                    <th scope="col"> Name </th>
                    <th scope="col"> Actual group </th>
                    <th scope="col"> Wanted group </th>
                    </tr>
                </thead>

                <tbody>
                @for ($i = 0; $i < sizeof($demandes); $i++)
                    <tr>
                        <th scope="row"> {{ $i }} </th>
                        <td> {{ $demandes[$i]->nom}}  {{$demandes[$i]->prenom}} </td>
                        <td> {{ $demandes[$i]->grpActuel }} </td>
                        <td> {{ $demandes[$i]->grpDest }} </td>

                    </tr>
                @endfor
                </tbody>
            </table>
        </div>




        </main>
    </div>
</body>
</html>
