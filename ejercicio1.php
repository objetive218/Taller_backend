<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Ejercicio #1</title>
  </head>
  <body>
    <form action="ejercicio1.php" method="POST">
      <div class="numeros">
        <label for="n1">Nombre</label>
        <input type="number" name ="n1" id="n1" placeholder="Ingrese el primer numero" required />
        <label for="n2">N</label>
        <input type="number" name ="n2" id="n2" placeholder="Ingrese el segundo numero" required />
      </div>
      <div id="oper">
        <label for="operacion">Operacion a realizar</label>
        <select name="ope" id="operacion">
          <option value="">Seleccione una operación...</option>
          <option value="1">Suma</option>
          <option value="2">Resta</option>
          <option value="3">Multiplicación</option>
          <option value="4">División</option>
        </select>
        <button type="submit" name="operar">Operar</button>
      </div>
    </form>

    <?php
    
    if (isset($_POST['operar'])) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $ope = $_POST['ope'];

        switch ($ope) {
            case '1':
                $total = $n1 + $n2;
                $ope2 = 'suma'; 
                break;
            case '2':
                $total = $n1 - $n2;
                $ope2 = 'resta';
                break;
            case '3':
                $total = $n1 * $n2;
                $ope2 = 'multiplicación';
                break;
            case '4':
                $total = $n1 / $n2;
                $ope2 = 'división';
                break;
        }

        echo '<h1>La '.$ope2.' entre el número '.$n1.' y el número '.$n2.' es igual a = '.$total.'</h1>';
    }

    ?>
  </body>
</html>
