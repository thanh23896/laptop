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
    // $user = json_decode($_COOKIE['user']);

    $data = $request->getBody();
    if ($_FILES['image']['size'] > 0) {
      $data['image'] = $_FILES['image']['name'];
      move_uploaded_file($_FILES['image']['tmp_name'], '/images/' . $data['image']);
    }

    UserModel::findOne($user['id'])
      ->update($data);
    $new =  UserModel::findOne($user['id']);

    $_SESSION['user'] = $new;
    var_dump($_SESSION['user']);
    die;
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
    $users = UserModel::all();
    foreach ($users as $user) {
      if ($user->email == $login['email'] && $user->pass == $login['pass']) {
        // setcookie('user', json_encode($user), time() + (86400 * 1), "/"); // 86400 = 1 day
        $_SESSION["user"] = (array) $user;
        header('location: /');
        exit;
      }
    }
  }
  public function register()
  {
    return $this->view('frontend/dangki');
  }
  public function registerPost(Request $request)
  {
    $register = $request->getBody();
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
      } else {
        header('location: /register');
        exit;
      }
    }
  }
  public function logout()
  {
    session_destroy();
    header('location:/');
  }
}
