<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <title>ejercicio#2</title>
</head>
<body>
<form action="ejercicio4.php" method="POST">
      <div class="numeros">
        <label for="fecha">Fecha de nacimiento</label>
        <input type="date" name ="fecha" id="fecha" required />
      <div id="oper">
        <button type="submit" name="calcular">Calcular</button>
      </div>
      </div>
    </form>

    <?php
    
    if (isset($_POST['calcular'])) {
      $fecha_n = $_POST['fecha'];
      $fecha = new DateTime($_POST['fecha']);
      $fecha_act_n = date('Y-m-d');
      $fecha_act = new DateTime(date('Y-m-d'));
      $diff = $fecha->diff($fecha_act);
      $año = $diff->y;
      $mes = $diff->m;
      $dia = $diff->d;

      echo 'Tu fecha de nacimiento = '.$fecha_n.'<br>'.
           'Fecha actual = '.$fecha_act_n.'<br>'.
           'Tu edad es = '.$año.' año(s) '.$mes.' mese(s) y '.$dia.' dia(s)';
  }

    ?>
</body>
</html>