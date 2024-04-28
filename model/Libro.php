<?php
class Libro {
    private $id_libro;
    private $titulo;
    private $autor;
    private $publicacion;

    public function __construct($id = null,$titulo, $autor, $publicacion) {
        $this->id_libro = $id_libro;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->publicacion = $publicacion;
    }

    // Getters y setters para cada propiedad
    public function getId() {
        return $this->id_libro;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getPublicacion() {
        return $this->publicacion;
    }

    public function setPublicacion($publicacion) {
        $this->publicacion = $publicacion;
    }
}
