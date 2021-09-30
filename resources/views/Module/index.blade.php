<table>
    <tr>
        <td>Id</td>
        <td>Nom</td>
        <td>Duree</td>
    </tr>
    @foreach($listmodules as $module )
        <tr>
         <td>{{$module->NomModule}}</td>
         <td>{{$module->Description}}</td>
         <td>{{$module->duree}}</td>
        </tr>
    @endforeach

</table>
