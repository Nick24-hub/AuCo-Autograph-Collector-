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

        $this->show();
    }
    public function show()
    {
        $cart_data=$this->cartModel->show();
        $this->view('/cart',$cart_data);
    }
    public function remove($product_id)
    {
        $this->cartModel->remove($product_id);
        $this->show();
    }
}?>