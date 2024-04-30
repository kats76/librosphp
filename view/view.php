<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Libros</title>
    <link rel="stylesheet" href="../view/styles.css"> <!-- Enlazar el archivo de estilos CSS -->
</head>
<body>
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>

    <form id="addForm" action="controller.php" method="POST" class="form">
      <div class="form-group">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo">
      </div>
      <div class="form-group">
        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor">
      </div>
      <div class="form-group">
        <label for="publicacion">Publicación:</label>
        <input type="date" id="publicacion" name="publicacion">
      </div>
      <button type="submit">Enviar</button>
    </form>

  </div>
</div>
    <header>
        <h1>Lista de Libros</h1>
    </header>

    <section>
      <table>
        <!-- Encabezados de la tabla -->
        <tr>
          <th>Título</th>
          <th>Autor</th>
          <th>Publicación</th>
          <th class="add-icon">
            <button id="openModalButton">+</button>
          </th>
        </tr>

        <!-- Filas de la tabla -->
        <?php foreach ($libros as $libro): ?>
            <tr>
                <!-- Celdas con la información de cada libro -->
                <td><?php echo $libro->getTitulo(); ?></td>
                <td><?php echo $libro->getAutor(); ?></td>
                <td><?php echo $libro->getPublicacion(); ?></td>
                <!-- Botones de acciones (editar, eliminar) -->
                <td class="actions">
                    <button>Editar</button> <!-- Botón para editar -->
                    <button>Editar</button> <!-- Botón para editar -->
                    <form method="POST" action="controller.php?action=delete">
                        <input type="hidden" name="id_libro" value="<?php echo $libro->getId(); ?>">
                        <input type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
      </table>

</section>


    </section>
    <footer>
        <p>Derechos de autor © 2024 Prueba PHP</p>
    </footer>
</body>
<script>
    // Obtener referencia al botón de abrir modal y al modal
    const openModalButton = document.getElementById('openModalButton');
    const modal = document.getElementById('myModal');

    // Obtener referencia al botón de cierre del modal
    const closeButton = document.getElementsByClassName('close')[0];

    // Manejar el clic en el botón de abrir modal
    openModalButton.addEventListener('click', function() {
        modal.style.display = 'block'; // Mostrar el modal
    });

    // Manejar el clic en el botón de cierre del modal
    closeButton.addEventListener('click', function() {
        modal.style.display = 'none'; // Ocultar el modal
    });

    // Manejar el clic fuera del formulario para cerrar el modal
    window.addEventListener('click', function(event) {
        if (event.target == modal) {
            modal.style.display = 'none'; // Ocultar el modal
        }
    });
</script>


</html>

