
    <form action="/addd" method="POST">
    {{ csrf_field() }}
    Nom: <input type="text" name="id" placeholder="entrer ton matricule">
    </br>
    </br>
    Prenom: <input type="text" name="grpDest" placeholder="entrer le groupe voulu">
    </br>
    </br>
    <input type="submit" value="Demander permutation">

    </form>
</body>
</html>