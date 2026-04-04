<?php
require_once 'Connexion.php';

class Product {
    private $conn;
    private $table_name = 'products';

    public function __construct() {
        $this->conn = new Connexion();
        $this->conn = $this->conn->getConnection();
    }

    public function getCatalog(): array {
        try {
            $query = 'SELECT * FROM ' . $this->table_name;
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    public function getByID(string $product_id): array {
        $query = 'SELECT * FROM ' . $this->table_name . ' WHERE id = ' . $product_id;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>