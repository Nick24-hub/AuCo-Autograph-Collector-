<?php
class User
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function register($data)
    {
        $this->db->query('INSERT INTO users (username, email, user_password) VALUES(:username, :email, :password)');

        //Bind values
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function login($username, $password)
    {
        $this->db->query('SELECT * FROM users WHERE username = :username');

        //Bind value
        $this->db->bind(':username', $username);

        $row = $this->db->single();
        if ($row) {
            $hashedPassword = $row->user_password;

            if (password_verify($password, $hashedPassword)) {
                return $row;
            } else {
                return false;
            }
        }
    }

    //Find user by email. Email is passed in by the Controller.
    public function findUserByEmail($email)
    {
        //Prepared statement
        $this->db->query('SELECT * FROM users WHERE email = :email');

        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);

        //Check if email is already registered
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    // Manage 
    public function manage()
    {
        $this->db->query('SELECT * FROM users WHERE username != "admin"');
        $data = $this->db->resultSet();
        return $data;
    }
    public function remove($id)
    {
        $this->db->query("DELETE FROM users WHERE id='$id'");
        $this->db->execute();
        $this->db->query("SELECT * FROM products WHERE user_id='$id'");
        $results = $this->db->resultSet();
        foreach ($results as $product) {
            $this->db->query("DELETE FROM in_cart WHERE product_id='$product->id'");
            $this->db->execute();
        }
        $this->db->query("DELETE FROM in_cart WHERE user_id='$id'");
        $this->db->execute();
        $this->db->query("DELETE FROM products WHERE user_id='$id'");
        $this->db->execute();
    }
    public function edit_user($data, $id)
    {
        $username = $data['username'];
        $this->db->query("UPDATE users SET username='$username' WHERE id='$id' ");
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function account_info($id)
    {
        $this->db->query("SELECT * FROM users WHERE id='$id'");
        $results = $this->db->single();
        return $results;
    }

    public function edit_my_account($data, $id)
    {
        $username = $data['username'];
        $email = $data['email'];
        $password = $data['newPassword'];

        $this->db->query("UPDATE users SET username='$username', email='$email', user_password='$password' WHERE id='$id' ");

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
