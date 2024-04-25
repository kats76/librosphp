<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Taller </title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f8f8f8;
    color: #333;
    margin: 0;
    padding: 0;
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
  }

  footer {
  background-color: #333;
  color: white;
  text-align: center;
  padding: 10px 0;
  width: 100%;
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

  tr:hover {background-color: #f5f5f5;}

form {
    background-color: white;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 20px;
    margin: 15px;
  }

  /* Estilos para las etiquetas de los campos del formulario */
  form label {
    display: block;
    margin-bottom: 10px;
  }

  /* Estilos para los campos de entrada del formulario */
  form input, form textarea, form select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-bottom: 20px;
  }

  /* Estilos para el botón de envío del formulario */
  form button {
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
  }

  /* Estilos para el botón de envío al pasar el mouse */
  form button:hover {
    background-color: #0056b3;
  }

</style>
</head>
<body>

<header>
  <h1>Pagina de Prueba PHP</h1>
</header>

<section>
<form   action="index.php" method='GET'>
  <label for="nombre">Id:</label>
  <input type="number" id="id" name="id">

  <label for="email">Titulo:</label>
  <input type="text" id="titulo" name="titulo">

  <label for="text">Autor:</label>
  <input type="text" id="autor" name="autor">

  <label for="date">Publicacion:</label>
  <input type="date" id="publicacion" name="publicacion">

  <button type="submit">Enviar</button>
</form>

  <h2>Lista de Libros</h2>
<?php

require_once 'databaseconnect.php';

       $username = $_GET['id'];
       $test1 = $_GET['titulo'];
       $test2 = $_GET['autor'];
       $test3 = $_GET['publicacion'];

try {
    // Preparar la consulta SQL
    $stmt = $conn->prepare("SELECT * FROM libros");
    $stmt->execute();

    // Establecer el modo de fetch en asociativo
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Iniciar la tabla
    echo "<table>";
    echo "<tr>
		<th> Id</th>
		<th> Titulo</th>
		<th>Autor</th>
		<th>Publicacion</th>
	 </tr>"; 

    // Recorrer los resultados
    while($row = $stmt->fetch()) {
        echo  "<tr><td>" . $row["id_libro"] . "</td><td>" 
			 . $row["titulo"] . "</td><td>"
			 . $row["autor"] . "</td><td>"
			 . $row["publicacion"] . "</td></tr>"; 
    }
    echo "<tr> 
	    <td>
	       $username
          </td> 
	    <td>
	       $test1
          </td>  
	    <td>
	       $test2
          </td>  
	    <td>
	       $test3
          </td> 
	 </tr> ";
    echo "</table>";
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

</section>

<footer>
  <p>Derechos de autor © 2024 Prueba PHP</p>
</footer>

</body>
</html>
