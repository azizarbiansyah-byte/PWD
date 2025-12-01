<?php
class Hewan {
    private $conn;
    private $table = "hewan";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table;
        return $this->conn->query($query);
    }
}
?>
