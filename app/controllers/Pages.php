<?php
class Pages extends Controller
{
    public function __construct()
    {
        //$this->userModel = $this->model('User');
    }

    public function index()
    {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('index', $data);
    }

    public function gallery()
    {
        $this->view('gallery');
    }

    public function contact()
    {
        $this->view('contact');
    }

    public function cart()
    {
        $this->view('cart');
    }
}
