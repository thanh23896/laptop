<?php

namespace App\Controllers\admin;

use App\Controllers\Controller;
use App\Models\CommentModel;
use App\Models\UserModel;

class CommentController extends Controller
{
  public function index()
  {
    $comment = new CommentModel;
    $comments = $comment->selectTable("comments.id,description,created_at,full_name,image")->joinTable("users")->on('users.id', "comments.id_user")->get();


    return $this->view('backend/comments/list', ['comments' => $comments]);
  }
}
