<?php
class Database {
    private $host = "localhost";
    private $username = "juan";
    private $password = "juan1129";
    private $dbname = "libros";

    public function getConnection() {
        $conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
}
