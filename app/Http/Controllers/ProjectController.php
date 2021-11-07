<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Comment;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

class ProjectController extends Controller
{
    public function store(Request $request){
     $temp= Project::create([
            'name' => $request->name,
            'description' => $request->description,
            'user_id' => $request->user()->id,
            'file' => $request->file('input_c3p')->getClientOriginalName(),
            'thumbnail' => $request->file('input_png')->hashName(),
        ]);
        Storage::disk('public_uploads')->put('/',$request->file('input_png') );
        $zipArchive = new ZipArchive();
        $result = $zipArchive->open($request->file('input_c3p'));
    if ($result === TRUE) {
    $zipArchive ->extractTo("projects/".$temp->id."/");
    $zipArchive ->close();
    return route('showproject',$temp->id);

} else {
    // Do something on error
}
    }

    public function create(){
        return view('uploadproject');
    }

    public function show($id){
        $project = Project::findOrFail($id);
        return view('showproject',compact('project'));
    }

    public function showcase(){
        $project = Project::orderBy('id','desc')->take(8)->get();
        return view('welcome', compact('project'));
    }
    public function showmine(){
        $comment = 0;
        $like = 0;
        $project = Project::where('user_id',Auth::user()->id)->get();
       
        foreach($project as $pro){
            $comment = $comment + $pro->comments->count();
            $like = $like + $pro->likes->count();
        }
        return view('dashboard', compact('project','comment','like'));
    }
}