<?php

require_once '../model/libroModel.php';

class LibroController {
    public function index() {
        $model = new libroModel();
        $libros = $model->getAllBooks();
        require '../view/view.php';
    }

    // Otros métodos para manejar la creación, actualización y eliminación de libros
}

// Uso del controlador
$controller = new LibroController();
$controller->index();
