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
        $this->db->query("INSERT INTO in_cart (user_id,product_id) VALUES(:user_id,:product_id)");
        $this->db->bind(':user_id', $_SESSION['user_id']);
        $this->db->bind(':product_id', $data);
         
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
}
