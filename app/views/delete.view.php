<html>
  <head>
    <title><?php echo $title; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Bungee+Inline|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="app.css">
  </head>
  <body>

    <div class="container">
      <h1><?php echo $title; ?></h1>

      <form method="post" action="delete.php?id=<?php echo $edit_todo['id'] ?>">
        <input type="hidden" name="id" value="<?php echo $edit_todo['id'] ?>" />
        <h2>Realmente quieres eliminar esta tarea?
           <?php echo $edit_todo['title'] ?></h2>

          <input type="submit" value="Eliminar" />
          <br />
          <a href="/index.php">Cancelar</a>

      </form>
    </div>
  </body>
</html>
