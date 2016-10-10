<?php
  $title = 'Mis Actividades';
?>
<html>
  <head>
    <title><?php echo $title; ?></title>
  </head>
  <body>
    <h1><?php echo $title; ?></h1>
    <form method="post" action="">
      <label for="thing">Qué quieres hacer?</label>
      <input type="text" name="thing" id="thing" />
      <input type="submit" value="Agregar" />
    </form>
    <hr />

    <h2></h2>
    <ul>
      <li>Hacer tarea de programación</li>
      <li>Estudiar sobre funciones</li>
      <li><s>Ir al mandado</s></li>
      <li>Cita con el dentista a las 3 pm</li>
    </ul>
    <hr />

    <p>
      <strong>Total:</strong> 4  &nbsp;&nbsp;&nbsp;
      <strong>Completadas:</strong> 1 &nbsp;&nbsp;&nbsp;
      <strong>Por completar:</strong> 3
    </p>
  </body>
</html>
