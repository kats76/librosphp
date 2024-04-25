<!-- view.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Libros</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Establecer la altura mínima de la ventana gráfica */
        }
        header {
            background-color: #007bff;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        section {
            margin: 15px;
            padding: 20px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            flex: 1; /* Hacer que el section ocupe todo el espacio disponible */
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            width: 100%;
            flex-shrink: 0; /* Evitar que el footer se encoja */
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        .add-icon {
            width: 30px;
            text-align: center;
        }
        /* Estilos para los botones */
        .add-icon button {
            padding: 6px 10px;
            border: none;
            border-radius: 3px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }
        /* Estilos para los botones al pasar el ratón */
        .add-icon button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <h1>Lista de Libros</h1>
    </header>
    <section>
        <table>
            <tr>
                <th>Id</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Publicación</th>
                <th class="add-icon">
                    <button>+</button> <!-- Botón con el icono de más para agregar -->
                </th> 
            </tr>
            <?php foreach ($libros as $libro): ?>
                <tr>
                    <td><?php echo $libro->getId(); ?></td>
                    <td><?php echo $libro->getTitulo(); ?></td>
                    <td><?php echo $libro->getAutor(); ?></td>
                    <td><?php echo $libro->getPublicacion(); ?></td>
                    <td class="actions">
                        <button>Editar</button> <!-- Botón para editar -->
                        <button>Eliminar</button> <!-- Botón para eliminar -->
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
    <footer>
        <p>Derechos de autor © 2024 Prueba PHP</p>
    </footer>
</body>
</html>

