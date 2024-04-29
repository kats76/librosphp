<?php
require_once '../model/libroModel.php';
require_once '../model/Libro.php';

class LibroController {
    public function index() {
        // Verificar si se recibieron datos del formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recuperar los datos del formulario
            $titulo = $_POST['titulo'];
            $autor = $_POST['autor'];
            $publicacion = $_POST['publicacion'];
            
            // Validar los datos (puedes agregar más validaciones según tus necesidades)
            if (empty($titulo) || empty($autor) || empty($publicacion)) {
                echo "Por favor, completa todos los campos.";
                return;
            }
            
            // Crear un nuevo libro con los datos recibidos
            $libro = new Libro($id_libro = null,$titulo, $autor, $publicacion);
            
            // Instanciar el modelo y llamar al método para agregar el libro
            $model = new libroModel();
            $model->createBook($libro);
            
            // Redirigir a la página principal u otra página de tu elección
            header("Location: controller.php");
            exit();
        }
        
        $model = new libroModel();
        $libros = $model->getAllBooks();
        // Si no se recibió una solicitud POST, mostrar la página normal
        require '../view/view.php';
    }

    // Otros métodos para manejar la creación, actualización y eliminación de libros
}

// Uso del controlador
$controller = new LibroController();
$controller->index();
?>

