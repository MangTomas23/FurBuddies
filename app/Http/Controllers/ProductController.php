<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class ProductController extends Controller
{
    public function index() {
      return view('product');
    }

    public function show() {
      // $comment = Comment::find(2);
      // return view('show', ['comment' => $comment]);
      $comments = Comment::all();
      return view('show', ['comments' => $comments]);
    }

    public function create(Request $request) {
      $comment = new Comment;
      $comment->commenter = $request->commenter;
      $comment->text = $request->comment;
      $comment->votes = $request->votes;
      $comment->save();
    }
}
