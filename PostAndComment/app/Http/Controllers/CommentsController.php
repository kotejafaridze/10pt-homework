<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CommentsController extends Controller
{
    public function getUser(Request $request, $user){
        $comments = $user->Comments;
        return response()->json([
            "user" => $user,
            "comments" =>$comments
        ]);
    }
}
