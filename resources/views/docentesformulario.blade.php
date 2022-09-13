<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Docentes</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <div class="contact_form">
    <div class="docentesformulario">
      <h1 >Docentes</h1>
      
      <form action="{{url('docentesformulario')}}" method="POST">
        @csrf
          <legend><h3>Registro de docentes</h3></legend>
          <p>
            <label class="colocar_nombre"><b>Nombre</b><span class="obligatorio">:</span></label>
            <input type="text" name="nombre" placeholder="Escribe el nombre" value=" {{old ('nombre')}} ">
            
            <!-- AQUÍ AGREGO EL MENSAJE DE ERROR DE LA VALIDACIÓN -->
            
            @error ('nombre')
                <P style="font-style: italic; color: red">{{ $message }}</P>
            @enderror
          </p>
            
          <p>
            <label class="colocar_apellidos"> <b>Apellidos:</b><span class="obligatorio">:</span></label>
            <input type="text" name="apellidos" id="apellidos" placeholder="Escribe lod apellidos" value=" {{old ('apellidos')}} ">
            @error ('apellidos')
                <P style="font-style: italic; color: red">{{ $message }}</P>
            @enderror
          </p>
            
          <p>
            <label class="colocar_area"><b>Área:</b></label>
            <input type="tel" name="area" id="area" placeholder="Escribe el nombre del area" value=" {{old ('area')}} ">
            @error ('area')
                <P style="font-style: italic; color: red">{{ $message }}</P>
            @enderror
          </p>
            
          <p>
            <label class="colocar_numero_nomina"><b>Número de Nómina:</b></label>
            <input type="text" name="numero_nomina" id="numero_nomina" value="{{old('numero_nomina')}}">
            @error ('numero_nomina')
                <P style="font-style: italic; color: red">{{ $message }}</P>
            @enderror
          </p>
            
        <p>
          <input class="btn btn-dark" type="submit" value="Enviar Información" >
        </p>
      </form>
    </div>
  </div>
</body>
</html>