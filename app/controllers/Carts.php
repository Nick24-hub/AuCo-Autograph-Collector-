<?php

class Carts extends Controller
{
    public function __construct()
    {
        $this->cartModel = $this->model('Cart');
    }

    public function add($data)
    {
        $this->cartModel->add($data);

        $this->view('index');
    }
}?>