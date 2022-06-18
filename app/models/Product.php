<?php
class Product
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function findMyProductsByFilter($user_id, $filter)
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

    public function deleteProduct($product_id)
    {
        $this->db->query("DELETE FROM products WHERE id='$product_id'");
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function edit($product_id, $data)
    {
        $this->db->query("UPDATE products SET title = :title, category = :category, details = :details, price = :price, for_sale = :for_sale, img = :img WHERE id = $product_id");
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':category', $data['category']);
        $this->db->bind(':details', $data['details']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':img', $data['img'][0]);
        $this->db->bind(':for_sale', $data['for_sale']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function add_product($data)
    {
        $this->db->query("INSERT INTO products (title,category,details,price,for_sale,img,user_id) VALUES (:title,:category,:details,:price,:for_sale,:img,:user_id)");
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':category', $data['category']);
        $this->db->bind(':details', $data['details']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':for_sale', $data['for_sale']);
        $this->db->bind(':img', $data['img'][0]);
        $this->db->bind(':user_id', $data['user_id']);


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
