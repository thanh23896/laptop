<?php

namespace App\Controllers;


use App\Request;
use App\Models\BillModel;
use App\Controllers\Controller;
use App\Models\BillDetailModel;

class CheckoutController extends Controller{
  public function index()
  {
    $total = 0;
        $products = $_SESSION['products'];
        return $this->view('frontend/checkout', ["products" => $products, "total" => $total]);
  }
  public function dathang(Request $request)
  {
    $user = $_SESSION['user'];
    $data = $request->getBody();
    $data['id_user'] = $user['id'];
    $p = new BillModel;
    $idInsert =  $p->insert($data);
    foreach ($_SESSION['products'] as $product) {
      $data = [
        "id_products" => $product['id'],
        "id_bill" => $idInsert,
        "quantity" => $product['numberQuantity'],
        "namePro" => $product['title'],
        "image" => $product['images'],
        "price" => $product['price'],
        "total" => $product['numberQuantity'] * $product['price']
      ];
      $p = new BillDetailModel;
      $p->insert($data);
      
    }
    unset($_SESSION['products']);
    header('Location: /');
    exit;
  }
}