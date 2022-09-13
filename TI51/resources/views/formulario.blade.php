<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <div class="contact_form">
    <div class="formulario">
      <h1>Formulario</h1>
      
      <form action="{{url('formulario')}}" method="POST">
        @csrf
          <legend><h3>Ingresar Información</h3></legend>
          <p>
            <label class="colocar_nombre">Nombre del Tour<span class="obligatorio">:</span></label>
            <input type="text" name="nombre" id="nombre" placeholder="Escribe el nombre">
          </p>
            
          <p>
            <label class="colocar_precio">Precio<span class="obligatorio">:</span></label>
            <input type="text" name="precio" id="precio" placeholder="Escribe el precio">
          </p>
            
          <p>
            <label class="colocar_guia">Nombre del Guia:</label>
            <input type="tel" name="guia" id="guia" placeholder="Escribe el nombre">
          </p>
            
          <p>
            <label class="colocar_ameni">Amenidades:</label>
            <input type="text" name="amenidades" id="amenidades">
          </p>
            
          <p>
            <label class="colocar_descrip">Descripción<span class="obligatorio">:</span></label>
            <textarea name="descripcion" class="texto_mensaje" id="descrip"></textarea> 
          </p>
        <p>
          <input type="submit" value="Enviar Información">
        </p>
      </form>
    </div>
  </div>
</body>
</html>