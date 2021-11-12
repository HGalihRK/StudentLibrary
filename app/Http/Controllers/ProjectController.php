<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Comment;
use App\Models\Like;
use App\Models\User;
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
    return redirect(route('showproject',$temp->id));

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
        $project = Project::orderBy('id','desc')->where('hide','0')->take(8)->get();
        return view('welcome', compact('project'));
    }
    public function dashboard(){
        $comment = 0;
        $like = 0;
        $project = Project::where('user_id',Auth::user()->id)->where('hide','0')->get();
       
        foreach($project as $pro){
            $comment = $comment + $pro->comments->count();
            $like = $like + $pro->likes->count();
        }
        return view('dashboard', compact('project','comment','like'));
    }
    
    
    public function showmineall($requestid){
        $comment = 0;
        $like = 0;
        $project = Project::where('user_id',$requestid)->where('hide','0')->get();
        $user = User::find($requestid);
        foreach($project as $pro){
            $comment = $comment + $pro->comments->count();
            $like = $like + $pro->likes->count();
        }
        return view('showmine', compact('project','comment','like','user'));
    }

    public function games(){
        $project = Project::where('hide',0)->get();
        $user = null;
        return view('games', compact('project','user'));
    }
    public function filtergames(Request $request){
        $project = Project::where('hide',0)->where('name','LIKE','%'.$request->search.'%')->get();
        $user = User::where('name','LIKE','%'.$request->search.'%')->get();
        return view('games', compact('project','user'));
    }
    public function delete($id){

        $temp = Project::find($id);
        if($temp->user->id == Auth::user()->id){
            $temp->update([
                'hide' => 1
            ]);
            return redirect(route('dashboard'));
        }else{

        }
        
    }
    public function random(){
        $project = Project::all()->pluck('id')->random();
        return redirect(route('showproject',$project));
    }
    public function edit($id){
        $project = Project::find($id);
        return view('editproject',compact('project'));
        
    }

    public function save(Request $request){
       
        $project = Project::find($request->project_id);
        $project->update(
            [
                'name' => $request->name,
                'description'=>$request->description
            ]
            );
    return redirect(route('showproject', $request->project_id));
    }
}