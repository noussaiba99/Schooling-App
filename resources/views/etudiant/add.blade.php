<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter Etudiant</title>
</head>
<body>

    <form action="add" method="POST">
    {{ csrf_field() }}
    Nom: <input type="text" name="nom" placeholder="entrer ton nom">
    </br>
    </br>
    Prenom: <input type="text" name="prenom" placeholder="entrer ton prénom">
    </br>
    </br>
    email: <input type="email" name="email" >
    </br>
    </br>
    <input type="submit" value="Ajouter etudiant">

    </form>
</body>
</html>