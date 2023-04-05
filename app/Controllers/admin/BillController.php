<?php

namespace App\Controllers\admin;

use App\Controllers\Controller;
use App\Models\BillDetailModel;
use App\Models\BillModel;
use App\Models\ProductModel;
use App\Request;

class BillController extends Controller
{
  public function index()
  {
    $bills = BillModel::all();
    return $this->view('backend/bills/list', ['bills' => $bills]);
  }
  public function changeStatus(Request $request)
  {
    $bill = $request->getBody();
    BillModel::findOne($bill['id'])->update(["status"=> $bill['status']]);
    header("location: /admin/invoice");
    exit;
  }
  public function show (Request $request){
    $bill = $request->getBody();
    $b = new BillDetailModel;
    $bill_detail = $b->selectTable('*')->where('id', '=', $bill['id'])->get();
    return $this->view('backend/bills/show', ['bill_detail' => $bill_detail]);
  }
}
