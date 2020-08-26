<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Model\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    //
    public function postComment($id, Request $req){
        $idPro = $id;
        $showCmt = Products::find($id);
        $comment = new Comment();
        $comment->product_id = $idPro;
        $comment->user_id  = Auth::user()->id;
        $comment->cmt_content  = $req->cmt_content;
        $comment->save();

        return redirect()->back();
    }
}
