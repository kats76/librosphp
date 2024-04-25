<?php

require_once '../database.php';
require_once 'Libro.php';

class LibroModel {
    public function getAllBooks() {
        $db = new Database();
        $conn = $db->getConnection();
        
        $libros = array();
        
        $stmt = $conn->prepare("SELECT * FROM libros");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        
        while ($row = $stmt->fetch()) {
            $libro = new Libro($row['id_libro'], $row['titulo'], $row['autor'], $row['publicacion']);
            $libros[] = $libro;
        }
        
        return $libros;
    }
}
