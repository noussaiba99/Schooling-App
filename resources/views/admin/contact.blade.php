<h1>contact page</h1>
{{$name}}
</br>
<?php 

echo "</br>";
echo "admin id : ".$id."</br>"; 


for($i=1;$i<11;$i++)
{
    echo "hello".$i."</br>";
}
?>
<br>
{{"blade yeew"}} <!-- blade writing format-->

@for($i=1;$i<11;$i++)
{{"hello"}}
{{$i}}
</br>
@endfor <!-- blade loop format-->
