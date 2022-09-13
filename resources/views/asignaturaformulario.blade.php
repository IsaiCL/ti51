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
    <div class="asignaturaformulario">
      <h1 >Asignaturas</h1>
      
      <form action="{{url('asignaturaformulario')}}" method="POST">
        @csrf
          <legend><h3>Registro de Asignaturas</h3></legend>
          <p>
            <label class="colocar_nombre"><b>Asignatura:</b><span class="obligatorio"></span></label>
            <input type="text" name="nombre" placeholder="Escribe el nombre" value=" {{old ('nombre')}} ">
            
            <!-- AQUÍ AGREGO EL MENSAJE DE ERROR DE LA VALIDACIÓN -->
            
            @error ('nombre')
                <P style="font-style: italic; color: red">{{ $message }}</P>
            @enderror
          </p>
            
          <p>
            <label class="colocar_horas"> <b>Horas a la semana:</b><span class="obligatorio"></span></label>
            <input type="text" name="horas" id="horas" placeholder="Escribe los horas" value=" {{old ('horas')}} ">
            @error ('horas')
                <P style="font-style: italic; color: red">{{ $message }}</P>
            @enderror
          </p>
            
          <p>
            <label class="colocar_descripcion"><b>Descripción:</b></label>
            <input type="tel" name="descripcion" id="descripcion" placeholder="Escribe la descripcion" value=" {{old ('descripcion')}} ">
            @error ('descripcion')
                <P style="font-style: italic; color: red">{{ $message }}</P>
            @enderror
          </p>
            
          <p>
            <label class="colocar_carrera"><b>Carrera:</b></label>
            <select name ="carrera" class="input-text" name="carrera">
                        <option>Gastronomía</option>

                        <option>Mantenimiento</option>

                        <option>TI</option>

                        <option>Turismo</option>
                    </select>
                    
            @error ('carrera')
                <P style="font-style: italic; color: red">{{ $message }}</P>
            @enderror
          </p>
            
        <p>
          <input class="btn btn-dark" type="submit" value="Enviar" >
        </p>
      </form>
    </div>
  </div>
</body>
</html>