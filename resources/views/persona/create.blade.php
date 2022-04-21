<h1>Registrar Datos</h1>
<form action="{{ url('/persona')}}" method="post">
@csrf
@include('persona.form');   

</form>
