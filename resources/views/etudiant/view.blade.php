<table>
<tr>
        <td>
        Nom: 
        </td>
        <td>
        Prenom:
        </td>
        <td>
        modifier
        </td>
        <td>
        supprimer
        </td>
</tr>
@foreach ($etudiant as $student)
<tr>
        <td>
         {{ $student->nom }}
        
        </td>
        <td>
         {{ $student->prenom }}
        </td>
        <td>
        <a href="modifier/{{ $student->id }}">modifier</a> 

        </td>
        <td>
        <a href="add/{{ $student->id }}">supprimer</a> 
        </td>
</tr>
@endforeach
</table>
