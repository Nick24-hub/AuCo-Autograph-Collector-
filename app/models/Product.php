<?php
class Product
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function findProductById($id)
    {
        $this->db->query("SELECT * FROM products WHERE id = '$id'");

        $result = $this->db->single();

        return $result;
    }

    public function findProductByCategory($category)
    {
        $this->db->query("SELECT * FROM products WHERE category LIKE '%$category%'");

        $results = $this->db->resultSet();

        return $results;
    }

    public function findAllProducts()
    {
        $this->db->query('SELECT * FROM products ORDER BY created_at ASC');

        $results = $this->db->resultSet();

        return $results;
    }
}
