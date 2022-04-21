<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Tipo Identificacion</th>
            <th>Numero Identificacion</th>
            <th>Fecha Nacimiento</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        
        @foreach ($personas as $persona)
        <tr>
            <td>{{$persona->id}}</td>
            <td>{{$persona->nombre}}</td>
            <td>{{$persona->apellido}}</td>
            <td>{{$persona->documento}}</td>
            <td>{{$persona->cedula}}</td>
            <td>{{$persona->fechaNacimiento}}</td>
            <td> <a href="{{url('/persona/'.$persona->id.'/edit')}}" >Editar</a>| 
                <form action="{{url('/persona/'.$persona->id)}}" method="post">
                 @csrf
                 {{method_field('DELETE')}}   
                <input type="submit" onclick="return confirm('¿Deseas Borrar?')" 
                 value="Borrar">
                
                </form>    
            
                </td>
        </tr>
        @endforeach
    </tbody>
</table>
