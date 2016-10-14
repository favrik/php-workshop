<html>
  <head>
    <title><?php echo $title; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Bungee+Inline|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="app.css?<?php echo time(); ?>">
  </head>
  <body>

    <div class="container">
      <h1><?php echo $title; ?></h1>
      <form method="post" action="">
        <div class="stats">
          <span><strong>Total:</strong> 4</span>
          <span><strong>Completadas:</strong> 1</span>
          <span><strong>Por completar:</strong> 3</span>
        </div>
        <label for="thing">¿Qué quieres hacer?</label>
        <input type="text" name="thing" id="thing" />
        <input type="submit" value="Agregar" />
      </form>

      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Actividad</th>
            <th>Completada</th>
            <th>Opciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Hacer tarea de programación</td>
            <td>Si</td>
            <td><a href="#">Editar</a></td>
          </tr>

          <tr>
            <td>1</td>
            <td>Hacer tarea de programación</td>
            <td>Si</td>
            <td><a href="#">Editar</a></td>
          </tr>
        </tbody>
      </table>

    </div>
  </body>
</html>

