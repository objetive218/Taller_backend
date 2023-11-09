<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <title>ejercicio#2</title>
</head>
<body>
<form action="ejercicio2.php" method="POST">
      <div class="numeros">
        <label for="edad">edad</label>
        <input type="number" name ="edad" id="edad" placeholder="edad" required />
      <div id="oper">
        <label for="operacion">Operacion a realizar</label>
        <button type="submit" name="calcular">Calcular</button>
      </div>
    </form>

    <?php
    if(isset($_POST['calcular'])){
      $edad = $_POST['edad'];
      
      if ($edad >= 18 && $edad <=100) {
        echo '<h1>Es mayor de edad</h1>';
    }if ($edad > 100){
        echo '<h1>Valor incorrecto</h1>';
    }if ($edad < 18 && $edad > 0){
        echo '<h1>Es menor de edad</h1>';
    }if ($edad <= 0){
        echo '<h1>Aun No ha nacido</h1>';
    }
    }

    ?>
</body>
</html>