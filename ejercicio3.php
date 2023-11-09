<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Ejercicio #1</title>
  </head>
  <body>
    <form action="ejercicio3_solucion.php" method="get">
      <div class="numeros">
        <label for="nombre">Nombre</label>
        <input type="text" name ="nombre" id="nombre" placeholder="Ingrese su Nombre" required />
        <label for="apellido">Apellido</label>
        <input type="text" name ="apellido" id="apellido" placeholder="Ingrese su Apellido" required />
        <label for="id">Cedula</label>
        <input type="number" name ="id" id="id" placeholder="Ingrese su Cedula" required />
      </div>
        <button type="submit" name="datos">Enviar</button>
      </div>
    </form>
  </body>
</html>
