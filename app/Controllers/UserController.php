<?php

namespace App\Controllers;

use App\Request;
use App\Controllers\Controller;
use App\Models\UserModel;

class UserController extends Controller
{
  public function profile()
  {
    $user = $_SESSION['user'];
    return $this->view('frontend/profile', ['user' => $user]);
  }
  public function profileChange(Request $request)
  {
    $user = $_SESSION['user'];

    $data = $request->getBody();
    if ($_FILES['image']['size'] > 0) {
      $data['image'] = $_FILES['image']['name'];
      move_uploaded_file($_FILES['image']['tmp_name'], '/images/' . $data['image']);
    }

    UserModel::findOne($user['id'])
      ->update($data);
    $new =  UserModel::findOne($user['id']);

    $_SESSION['user'] = [
      "id" => $new->id,
      "full_name" => $new->full_name,
      "email" => $new->email,
      "phone" => $new->phone,
      "role" => $new->role,
      "image" => $new->image
      
    ];
    
    header("location: /profile");
    exit;
  }
  public function quenmk()
  {
    return $this->view('frontend/quenmk');
  }
  public function login()
  {
    return $this->view('frontend/dangnhap');
  }
  public function loginPost(Request $request)
  {
    $login = $request->getBody();
    if (empty($login['email']) || empty($login['pass'])) {
    setcookie('error', 'Email hoặc mật khẩu không được để trống', time() + 1);
      header('location: /login');
      exit;
    }
    $users = UserModel::all();
    foreach ($users as $user) {
      if ($user->email == $login['email'] && $user->pass == $login['pass']) {
        $_SESSION["user"] = [
          "id" => $user->id,
          "full_name" => $user->full_name,
          "email" => $user->email,
          "phone" => $user->phone,
          "role" => $user->role,
          "image" => $user->image
        ];
        
        header('location: /');
        exit;
      }
    }
    setcookie('error', 'Email hoặc mật khẩu sai', time() + 1);
    header('location: /login');
    exit;
  }

  public function register()
  {
    return $this->view('frontend/dangki');
  }
  public function registerPost(Request $request)
  {
    $register = $request->getBody();
    if (empty($register['email']) || empty($register['pass']) || empty($register['full_name']) || empty($register['re_pass'])) {
      setcookie('error', 'Tất cả các trường không được để trống', time() + 1);
      header('location: /register');
      exit;
    }
    $users = UserModel::all();
    foreach ($users as $user) {
      if ($user->email !== $register['email']) {
        if ($register['pass'] == $register['re_pass']) {
          $data = [
            "email" => $register['email'],
            "pass" => $register['pass'],
            "full_name" => $register['full_name'],
          ];
          $p = new UserModel;
          $p->insert($data);
          header('location: /login');
          exit;
        }
      }
    }
  }
  public function logout()
  {
    session_destroy();
    header('location:/');
  }
}
