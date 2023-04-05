<?php

namespace App\Controllers;


use App\Request;
use App\Controllers\Controller;
use App\Models\CommentModel;
use App\Models\ProductModel;

class ProductController extends Controller
{
    public function index()
    {
        return $this->view('frontend/sanpham');
    }
    public function show(Request $request)
    {
        $product = $request->getBody();
        $product = ProductModel::findOne($product['id']);
        $comment = new CommentModel;
        $comments = $comment->selectTable('full_name,description,comments.id,created_at,image')->joinTable('users')->on('id_user', 'users.id')->where('id_pro', '=', $product->id)->get();
        $sameProduct = new ProductModel;
        $products = $sameProduct->selectTable("*")->where("category_id", "=", "$product->category_id")->limit(0, 8)->get();
        return $this->view('frontend/chitietsp', ['product' => $product, 'comments' => $comments, 'products' => $products]);
    }
    public  function comment(Request $request)
    {
        $user = $_SESSION['user']->id;
        $pro_id =  $_GET['id'];
        $comment = $request->getBody();

        $description = $comment['description'];
        $data = [
            "description" => $description,
            "id_pro" => $pro_id,
            "id_user" => "$user",
        ];
        $p = new CommentModel;
        $p->insert($data);
        header("location: /product-detail?id=$pro_id");
    }
    public  function addProduct(Request $request)
    {
        $product = $request->getBody();
        if (!isset($_SESSION['products'])) {
            $_SESSION['products'] = [];
        }
        array_push($_SESSION['products'], $product);
        header("location: /cart");
    }
    public function cart()
    {
        if (!isset($_SESSION['products'])) {
            $_SESSION['products'] = [];
        }
        $total = 0;
        $products = $_SESSION['products'];
        return $this->view('frontend/cart', ["products" => $products, "total" => $total]);
    }
    public function deleteCart(Request $request)
    {
        $id = $request->getBody();
        array_splice($_SESSION['products'], $id['id'], 1);
        header('location:/cart');
        exit;
    }
    public function changeCart(Request $request)
    {
        $qty = $_POST['quantity'];
        foreach ($_SESSION['products'] as $key => $item) {
            $_SESSION['products'][$key]['numberQuantity'] = $qty[$key];
        }
        header('location:/cart');
        exit;
    }
}
