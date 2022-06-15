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

    public function inventory($user_id, $filter)
    {
        if ($filter == 'all') {
            $products = $this->productModel->findMyProducts($user_id);
            $data = ['products' => $products];
            $this->view('products/inventory', $data);
        } else {
            $products = $this->productModel->findMyProductsByFilter($user_id, $filter);
            $data = ['products' => $products];
            $this->view('products/inventory', $data);
        }
    }
    public function deleteProduct($product_id)
    {
        $this->productModel->deleteProduct($product_id);
        $this->inventory($_SESSION['user_id'],'all');

    }
}
