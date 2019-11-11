
    <form action="/modifier" method="POST">
    {{ csrf_field() }}
    Nom: <input type="text" name="nom" value="{{$etudiant->nom}}" placeholder="entrer ton nom">
    </br>
    </br>
    Prenom: <input type="text" name="prenom" value="{{$etudiant->prenom}}" placeholder="entrer ton prénom">
    </br>
    </br>
    email: <input type="email" name="email" >
    </br>
    </br>
    <input type="submit" value="Ajouter etudiant">

    </form>
