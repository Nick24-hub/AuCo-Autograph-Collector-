<?php
class Product
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function findMyProductsById($user_id, $filter)
    {
        $this->db->query("SELECT * FROM products WHERE user_id = '$user_id' and category LIKE '%$filter%'");

        $result = $this->db->resultSet();

        return $result;
    }

    public function findMyProducts($user_id)
    {
        $this->db->query("SELECT * FROM products WHERE user_id = '$user_id'");

        $result = $this->db->resultSet();

        return $result;
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
