<?php

class Products extends Controller{
    public function __construct(){
        $this->productModel = $this->model('Product');
    }

    public function index(){
        $products = $this->productModel->findAllProducts();
        $data = ['products' => $products];
        $this->view('products/gallery', $data);
    }
}