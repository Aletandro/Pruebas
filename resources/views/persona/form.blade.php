<label for="Nombre" id="Nombre"> Nombre</label>
    <input type="text" name="Nombre" value="{{isset($personas->nombre)?$personas->nombre:""}}" >
    <br>

    <label for="Apellido" id="Apellido"> Apellido</label>
    <input type="text" name="Apellido" value="{{isset($personas->apellido)?$personas->apellido:""}}">
    <br>

    <label for="documento" id="documento"> Tipo de identificacion</label>
    <select name="documento" id="documento" value="{{isset($personas->documento)?$personas->documento:""}}">
        <option value="Cedula Ciudadania" > CC</option>
        <option value="Tarjeta Identidad">TI</option>
        <option value="Extranjeria">CE</option>
    </select>
    <br>

    <label for="cedula" id="cedula"> N°</label>
    <input type="text" name="cedula" value="{{isset($personas->cedula)?$personas->cedula:""}}">
    <br>

    <label for="fechaNacimiento">Fecha de nacimiento</label>
    <input type="date" value="2022-03-10" name="fechaNacimiento" value="{{isset($personas->fechaNacimiento)?$personas->fechaNacimiento:""}}">
    <br>
    
    <label for="password" id="password">Password</label>
    <input type="password" name="Password" value="123" >
    <br>
    
    <input type="submit" value ="Guardar Datos">
    <br>
    <a href= "{{url('persona/')}} ">Regresar</a>
