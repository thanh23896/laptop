<?php

use App\Controllers\admin\BillController;
use App\Router;
use App\Controllers\admin\HomeController as AdminHomeController;
use App\Controllers\admin\ProductController as AdminProductController;
use App\Controllers\admin\CategoryController as AdminCategoryController;
use App\Controllers\admin\UserController as AdminUserController;
use App\Controllers\admin\CommentController as AdminCommentController;
use App\Controllers\CheckoutController;
use App\Controllers\HomeController as UserHomeController;
use App\Controllers\ProductController;
use App\Controllers\UserController;

require_once __DIR__ . "/../vendor/autoload.php";
$router = new Router;
session_start();
Router::get('/', [UserHomeController::class, 'index']);
Router::get('/product', [ProductController::class, 'index']);
Router::get('/product-detail', [ProductController::class, 'show']);
Router::post('/comment-post', [ProductController::class, 'comment']);

Router::get('/quenmk', [UserController::class, 'quenmk']);
Router::get('/profile', [UserController::class, 'profile']);
Router::post('/profile', [UserController::class, 'profileChange']);
Router::get('/login', [UserController::class, 'login']);
Router::post('/login', [UserController::class, 'loginPost']);
Router::get('/register', [UserController::class, 'register']);
Router::post('/register', [UserController::class, 'registerPost']);
Router::get('/logout', [UserController::class, 'logout']);

Router::get('/cart', [ProductController::class, 'cart']);
Router::post('/cart', [ProductController::class, 'addProduct']);
Router::post('/changeCart', [ProductController::class, 'changeCart']);
Router::get('/delete-cart', [ProductController::class, 'deleteCart']);
Router::get('/dathang', [CheckoutController::class, 'index']);
Router::post('/dathang', [CheckoutController::class, 'dathang']);

Router::get('/admin', [AdminHomeController::class, 'index']);


//user
Router::get('/admin/user', [AdminUserController::class, 'index']);
//product
Router::get('/admin/product', [AdminProductController::class, 'index']);
Router::get('/admin/product/create', [AdminProductController::class, 'create']);
Router::post('/admin/product/create', [AdminProductController::class, 'store']);
Router::get('/admin/product/edit', [AdminProductController::class, 'edit']);
Router::post('/admin/product/edit', [AdminProductController::class, 'update']);
Router::get('/admin/product/delete', [AdminProductController::class, 'delete']);

//comment
Router::get('/admin/comment', [AdminCommentController::class, 'index']);
//category
Router::get('/admin/category', [AdminCategoryController::class, 'index']);
Router::get('/admin/category/create', [AdminCategoryController::class, 'create']);
Router::post('/admin/category/create', [AdminCategoryController::class, 'store']);
Router::get('/admin/category/edit', [AdminCategoryController::class, 'edit']);
Router::post('/admin/category/edit', [AdminCategoryController::class, 'update']);
Router::get('/admin/category/delete', [AdminCategoryController::class, 'delete']);
//bill
Router::get('/admin/invoice', [BillController::class, 'index']);
Router::get('/admin/bill/show', [BillController::class, 'show']);
Router::post('/admin/invoice', [BillController::class, 'changeStatus']);

$router->resolve();
