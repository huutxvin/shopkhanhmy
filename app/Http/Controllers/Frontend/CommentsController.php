<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comments;

class CommentsController extends Controller
{
    //
    public function postComments(Request $request, $id) {
    	$comment = new Comments;
    	$comment->email = $request->email;
    	$comment->username = $request->username;
    	$comment->content = $request->content;
    	$comment->product_id = $id;
    	$comment->save();
    	return back();
    }
}
