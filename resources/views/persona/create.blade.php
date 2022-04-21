<h1>Registrar Datos</h1>
<form action="{{ url('/persona')}}" method="post">
@csrf
    <label for="Nombre" id="Nombre"> Nombre</label>
    <input type="text" name="Nombre" >
    <br>

    <label for="Apellido" id="Apellido"> Apellido</label>
    <input type="text" name="Apellido">
    <br>

    <label for="documento" id="documento"> Tipo de identificacion</label>
    <select name="documento" id="documento">
        <option value="Cedula Ciudadania" selected> CC</option>
        <option value="Tarjeta Identidad">TI</option>
        <option value="Extranjeria">CE</option>
    </select>
    <br>

    <label for="cedula" id="cedula"> N°</label>
    <input type="text" name="cedula">
    <br>

    <label for="fechaNacimiento">Fecha de nacimiento</label>
    <input type="date" value="2022-03-10" name="fechaNacimiento">
    <br>
    
    <label for="password" id="password">Password</label>
    <input type="password" name="Password" value="123" >
    <br>
    <input type="submit" value ="Guardar Datos">

</form>
