<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Request $request){
    if($request->delete == null){
        Like::create([
            'user_id' => $request->user()->id,
            'project_id' => $request->project_id 
        ]);
    }else{
        Like::find($request->delete)->delete();
    }
    
        return back();
    }
}
