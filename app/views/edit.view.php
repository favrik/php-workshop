<html>
  <head>
    <title><?php echo $title; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Bungee+Inline|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="app.css">
  </head>
  <body>

    <div class="container">
      <h1><?php echo $title; ?></h1>

      <form method="post" action="edit.php?id=<?php echo $edit_todo['id'] ?>">
        <input type="hidden" name="id" value="<?php echo $edit_todo['id'] ?>" />
        <h2>Editando Actividad: <?php echo $edit_todo['id'] ?></h2>
        <table>
          <thead>
            <tr>
              <th>Título</th>
              <th> Completada?</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="text" name="title" value="<?php echo $edit_todo['title'] ?>" /></td>
              <td><input type="checkbox" value="1" name="completed" /></td>
           </tr>
           <tr>
              <td colspan="2"><input type="submit" value="Guardar" /></td>
           </tr>
          </tbody>
        </table>
      </form>
    </div>
  </body>
</html>

