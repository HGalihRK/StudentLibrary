<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request){
            Comment::create([
            'message' => $request->message,
            'user_id' => $request->user()->id,
            'project_id' => $request->project_id,
        ]);    
        return back();
}

public function delete($id){
Comment::find($id)->delete();
return back();
}
}
