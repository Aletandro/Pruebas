<h1>Actualizar datos</h1>
<form action="{{ url('/persona/'.$personas->id)}}" method="post">
@csrf
{{ method_field('PATCH')}}
    
@include('persona.form');   
    
</form>