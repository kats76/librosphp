<?php

include '/usr/share/data/data.php';

class Database {
    private $host;
    private $dbname;
    private $username;
    private $password;

    public function __construct() {
      $this->host = host;
      $this->dbname = dbname;
      $this->username = username;
      $this->password = password;

    }
    public function getConnection() {
        $conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
}

?>

