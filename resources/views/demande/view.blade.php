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
-->

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