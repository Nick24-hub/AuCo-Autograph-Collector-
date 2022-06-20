<?php

class Products extends Controller
{
    public function __construct()
    {
        $this->productModel = $this->model('Product');
    }

    public function rss()
    {
        $products = $this->productModel->findAllProducts();
        $data = ['products' => $products];
        $this->view('products/rss', $data);
    }

    public function csv()
    {
        $data = [
            ['cateogry', 'title', 'price', 'details', 'rating', 'id', 'owner_id', 'created_at', 'img_0', 'img_1', 'img_2', 'img_3', 'for_sale'],
        ];
        $products = $this->productModel->findAllProducts();

        $filename = 'products.csv';

        // open csv file for writing
        $f = fopen($filename, 'w');

        if ($f === false) {
            die('Error opening the file ' . $filename);
        }


        foreach ($products as $product) {
            array_push($data, (array)$product);
        }

        // write each row at a time to a file
        foreach ($data as $row) {
            fputcsv($f, $row);
        }

        // close the file
        fclose($f);
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
        $product = $this->productModel->findProductById($product_id);
        $data = [
            'category' => trim($_POST['category']),
            'title' => trim($_POST['title']),
            'details' => trim($_POST['details']),
            'price' => trim($_POST['price']),
            'for_sale' => trim($_POST['for_sale']),
            'img_0' => $product->img_0,
            'img_1' => $product->img_1,
            'img_2' => $product->img_2,
            'img_3' => $product->img_3,
        ];

        if ($_POST['img_0']) {
            $data['img_0'] = trim($_POST['img_0']);
        }
        if ($_POST['img_1']) {
            $data['img_1'] = trim($_POST['img_1']);
        }
        if ($_POST['img_2']) {
            $data['img_2'] = trim($_POST['img_2']);
        }
        if ($_POST['img_3']) {
            $data['img_3'] = trim($_POST['img_3']);
        }

        //Edit product from model function
        if ($this->productModel->edit($product_id, $data)) {
            $this->inventory($_SESSION['user_id'], 'all');
        } else {
            die('Something went wrong.');
        }
    }

    public function add_product()
    {
        $this->view('products/add_product');
    }

    public function addProduct($user_id)
    {
        $data = [
            'title' => trim($_POST['title']),
            'category' => trim($_POST['category']),
            'details' => trim($_POST['details']),
            'price' => trim($_POST['price']),
            'for_sale' => trim($_POST['for_sale']),
            'img_0' => trim($_POST['img_0']),
            'img_1' => trim($_POST['img_1']),
            'img_2' => trim($_POST['img_2']),
            'img_3' => trim($_POST['img_3']),
            'user_id' => $user_id
        ];

        //Add product from model function
        if ($this->productModel->add_product($data)) {
            $this->gallery('all');
        } else {
            die('Something went wrong.');
        }
    }
}
