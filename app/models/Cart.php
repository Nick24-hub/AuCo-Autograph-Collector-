<?php
class Cart
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function add($data)
    {
        $user_id = $_SESSION['user_id'];
        $this->db->query("SELECT * FROM in_cart WHERE user_id = '$user_id' AND product_id ='$data'");
        $result = $this->db->resultSet();
        if (!$result) {
            $this->db->query("INSERT INTO in_cart (user_id,product_id) VALUES(:user_id,:product_id)");
            $this->db->bind(':user_id', $_SESSION['user_id']);
            $this->db->bind(':product_id', $data);

            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
    public function findProductById($id)
    {
        $this->db->query("SELECT * FROM products WHERE id = '$id'");

        $result = $this->db->single();

        return $result;
    }
    public function show()
    {
        $user_id = $_SESSION['user_id'];
        $this->db->query("SELECT * FROM in_cart WHERE user_id = '$user_id'");
        $result = $this->db->resultSet();

        $product_list = array();
        foreach ($result as $product) {
            $result = $this->findProductById($product->product_id);
            array_push($product_list, $result);
        }

        return $product_list;
    }
    public function remove($product_id)
    {
        $user_id = $_SESSION['user_id'];
        $this->db->query("DELETE FROM in_cart WHERE product_id ='$product_id' 
                            AND user_id ='$user_id'");
        $this->db->execute();
    }
    public function checkout()
    {
        $user_id = $_SESSION['user_id'];
        $this->db->query("SELECT * FROM in_cart WHERE user_id = '$user_id'");
        $products_bought = $this->db->resultSet();
        
        foreach ($products_bought as $product) {
            $this->db->query("UPDATE products SET user_id='$user_id' WHERE id='$product->product_id'");
            $this->db->execute();
        }
        $this->db->query("DELETE FROM in_cart WHERE user_id ='$user_id'");
        $this->db->execute();
    }
    public function productsFromInventory()
    {
        $user_id = $_SESSION['user_id'];
        $this->db->query("SELECT * FROM products WHERE user_id = '$user_id'");
        $products_owned=$this->db->resultSet();
        return $products_owned;
    }
}
