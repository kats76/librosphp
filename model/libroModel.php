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

    public function createBook($libro) {
      $db = new Database();
      $conn = $db->getConnection();

      $stmt = $conn->prepare("INSERT INTO libros (titulo, autor, publicacion) VALUES (:titulo, :autor, :publicacion)");
      $stmt->bindParam(':titulo', $libro->getTitulo());
      $stmt->bindParam(':autor', $libro->getAutor());
      $stmt->bindParam(':publicacion', $libro->getPublicacion());
    
      $stmt->execute();
    }
    public function deleteBook($id_libro) {
      $db = new Database();
      $conn = $db->getConnection();

      $stmt = $conn->prepare("DELETE FROM libros WHERE id_libros=:id_libro;");
      $stmt->bindParam(':id_libro', $libro->getId());
        
      $stmt->execute();
    }
}
