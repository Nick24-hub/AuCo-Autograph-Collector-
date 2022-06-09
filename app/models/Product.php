<?php
class Product
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function findAllProducts()
    {
        $this->db->query('SELECT * FROM products ORDER BY created_at ASC');

        $results = $this->db->resultSet();

        return $results;
    }
}
