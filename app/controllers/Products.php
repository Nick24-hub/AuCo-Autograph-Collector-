<?php

class Products extends Controller
{
    public function __construct()
    {
        $this->productModel = $this->model('Product');
    }

    public function gallery($data)
    {
        if ($data == 'all') {
            $products = $this->productModel->findAllProducts();
            $data = ['products' => $products];
            $this->view('products/gallery', $data);
        } else {
            $products = $this->productModel->findProductByCategory($data);
            $data = ['products' => $products];
            $this->view('products/gallery', $data);
        }
    }

    public function product_details($id)
    {
        $product = $this->productModel->findProductById($id);
        $products = $this->productModel->findProductByCategory($product->category);
        $data = ['related_products' => $products, 'product' => $product];
        $this->view('products/product_details', $data);
    }
}
