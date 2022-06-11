<?php

class Products extends Controller
{
    public function __construct()
    {
        $this->productModel = $this->model('Product');
    }
    
    public function gallery($data)
    {
        if ($data=='all') {
            $products = $this->productModel->findAllProducts();
            $data = ['products' => $products];
            $this->view('products/gallery', $data);
        }
        elseif ($data=='writer')
        {
            $products = $this->productModel->findWriter();
            $data = ['products' => $products];
            $this->view('products/gallery', $data);
        }
        elseif ($data=='popstar')
        {
            $products = $this->productModel->findPopStar();
            $data = ['products' => $products];
            $this->view('products/gallery', $data);
        }elseif ($data=='rapstar')
        {
            $products = $this->productModel->findRapStar();
            $data = ['products' => $products];
            $this->view('products/gallery', $data);
        }elseif ($data=='trapstar')
        {
            $products = $this->productModel->findTrapStar();
            $data = ['products' => $products];
            $this->view('products/gallery', $data);
        }
    }
}
