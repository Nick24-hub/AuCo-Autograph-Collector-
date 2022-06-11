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
    public function findPopStar()
    {
        $this->db->query("SELECT * FROM products WHERE category='Pop Stars'");

        $results = $this->db->resultSet();

        return $results;
    }
    public function findRapStar()
    {
        $this->db->query("SELECT * FROM products WHERE category='Rap Stars'");

        $results = $this->db->resultSet();

        return $results;
    }
    public function findTrapStar()
    {
        $this->db->query("SELECT * FROM products WHERE category='Trap Stars'");

        $results = $this->db->resultSet();

        return $results;
    }
    public function findWriter()
    {
        $this->db->query("SELECT * FROM products WHERE category='Writer'");

        $results = $this->db->resultSet();

        return $results;
    }
   
}
