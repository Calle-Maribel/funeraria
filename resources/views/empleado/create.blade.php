formulario de creacion de empleados

<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
    @csrf

    <label for="Nombre"> Nombre</label>
    <input type="text" id="Nombre" name="Nombre" placeholder="Ingrese Nombre">
    <label for="Nombre"> Nombre</label>
    <input type="text" id="ApellidoPaterno" name="ApellidoPaterno" placeholder="Apellido Paterno">
    <label for="Nombre"> Nombre</label>
    <input type="text" id="ApellidoMaterno" name="ApellidoMaterno" placeholder="Apellido Materno">
    
    <input type="email" id="Correo" name="Correo" placeholder="Correo Electronico">

    <label for="Foto"> Foto</label>
    <input type="file" id="Foto" name="Foto">

    <input type="submit" value="Enviar">

</form>