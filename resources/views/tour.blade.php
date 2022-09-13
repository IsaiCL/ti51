<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario de Tours</title>
  
  </head>


<body>  
  

  <div class="contact_form">

    <div class="formulario">      
      <h1>Tours "La Casa del Turista"</h1>
      <br>
      <br>
        <h3><i>¡Escríbenos y en breve nos pondremos en contacto contigo!</i></h3>


          <form action="submeter-formulario.php" method="post"> 
              <br> 
              <b>    
                <p>
                  <label for="nombre" class="colocar_nombre"> Nombre del Tour:
                  </label>
                    <input type="text" name="introducir_nombre" id="nombre" placeholder="...">
                </p>
              
                <p>
                  <label for="precio" class="colocar_precio">Precio
                  </label>
                    <input type="precip" name="introducir_precio" id="precio"  placeholder="...">
                </p>
            
                <p>
                  <label for="telefone" class="colocar_telefono">Guía:
                  </label>
                    <input type="tel" name="introducir_telefono" id="telefono" placeholder="...">
                </p>    
              
                <p>
                  <label for="website" class="colocar_website">Amenidades:
                  </label>
                    <input type="url" name="introducir_website" id="website" placeholder="...">
                </p>    
              
                <p>
                  <label for="asunto" class="colocar_asunto">Descripción:
                  </label>
                    <input type="text" name="introducir_asunto" id="assunto" placeholder="...">
                </p>            
              </b>
                <br>
                <br>
                <button type="submit" name="enviar_formulario" id="enviar"><p>Enviar</p></button>      
            
          </form>
    </div>  
  </div>

</body>
</html>