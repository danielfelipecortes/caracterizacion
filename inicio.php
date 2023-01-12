<!DOCTYPE html>
<html lang="en-EN">
  <title>Caracterizacion UCP</title>
  <head>
    <?php include ("Estructura/head.php")?>
    <link rel="stylesheet" type="text/css" href="css/inicio.css" title="style" />
  </head>
  <body>
    <div class="container w-100 mw-100">
      <div class="content">
        <form method="post" action="login.php">
          <table class="TablaPrincipal">
            <tr><td rowspan="5"><img src="Imagenes/Login1.jpg"/></td></tr>
            <tr><td style="background-color:#FFFFFF; border-radius: 0 20px 0 0;"><input type="email" class="icono-placeholder-image" name="txtusuario" id="txtusuario" placeholder="Correo institucional" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@ucp.edu.co"/></td></tr>
            <tr><td style="background-color:#FFFFFF;"><input type="password" class="icono-placeholder-image2" name="txtpassword" id="txtpassword" placeholder="Contraseña"/></td></tr>
            <tr><td style="background-color:#FFFFFF;"><input type="submit" value="Ingresar" name="Ingresar" id="Ingresar"/></td></tr>
            <tr><td style="background-color:#FFFFFF; border-radius: 0 0 20px 0;"><img src="Imagenes/Ucp.png" class="uno"/></td></tr>   
          </table>
        </form>
        <form method="post" action="login.php">
          <table class="TablaPrincipal2">
            <tr><td><img src="Imagenes/Login1.jpg"/></td></tr>
            <tr><td style="background-color:#FFFFFF;"><input type="email" class="icono-placeholder-image" name="txtusuario" id="txtusuario" placeholder="Correo institucional" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@ucp.edu.co"/></td></tr>
            <tr><td style="background-color:#FFFFFF;"><input type="password" class="icono-placeholder-image2" name="txtpassword" id="txtpassword" placeholder="Contraseña"/></td></tr>
            <tr><td style="background-color:#FFFFFF;"><input type="submit" value="Ingresar" name="Ingresar" id="Ingresar"/></td></tr>
            <tr><td style="background-color:#FFFFFF; border-radius: 0 0 20px 20px;"><img src="Imagenes/Ucp.png" class="uno"/></td></tr>   
          </table>
        </form>
      </div>
    </div>
    <script>
      var input = document.getElementById('txtusuario');
      input.oninvalid = function(event) { event.target.setCustomValidity('Se requiere correo institucional @ucp.edu.co'); }
	  </script>
  </body>
</html>