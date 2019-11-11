
<table>
<tr>
        <td>
        matricule 
        </td>
        <td>
        grpVoulu
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
        <a href="demande/add">demander</a> 

        </td>

       
</tr>
@endforeach
</table>
