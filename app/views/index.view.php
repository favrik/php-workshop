<html>
  <head>
    <title><?php echo $title; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Bungee+Inline|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="app.css">
  </head>
  <body>

    <div class="container">
      <h1><?php echo $title; ?></h1>
      <form method="post" action="">
        <div class="stats">
          <span><strong>Total:</strong> <?php echo $statuses['total'] ?></span>
          <span><strong>Completadas:</strong> <?php echo $statuses['completed'] ?></span>
          <span><strong>Por completar:</strong> <?php echo $statuses['todo'] ?></span>
        </div>
        <br />
        <label for="thing">¿Qué quieres hacer?</label>
        <input type="text" name="todo" id="thing" />
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
          <?php foreach ($tasks as $task): ?>
          <tr>
            <td><?php echo $task['id'] ?></td>
            <td><?php echo $task['title'] ?></td>
            <td><?php echo $task['completed'] ?></td>
            <td><a href="#">Editar</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

    </div>
  </body>
</html>

