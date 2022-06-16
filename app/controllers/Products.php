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
        if ($this->productModel->deleteProduct($product_id)) {

            $this->inventory($_SESSION['user_id'], 'all');
        } else {
            die('Something went wrong.');
        }
    }
    public function editPage($product_id)
    {
        $product = $this->productModel->findProductById($product_id);
        $data = ['product' => $product];
        $this->view('products/edit_product', $data);
    }
    public function editProduct($product_id)
    {
        $data = [
            'category' => trim($_POST['category']),
            'title' => trim($_POST['title']),
            'details' => trim($_POST['details']),
            'price' => trim($_POST['price']),
            'for_sale' => trim($_POST['for_sale']),
        ];

        //Edit product from model function
        if ($this->productModel->edit($product_id, $data)) {
            $this->inventory($_SESSION['user_id'], 'all');
        } else {
            die('Something went wrong.');
        }
    }
}
