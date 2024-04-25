<?php
class Database {
    private $host = "localhost";
    private $username = "test";
    private $password = "test";
    private $dbname = "test";

    public function getConnection() {
        $conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
}
