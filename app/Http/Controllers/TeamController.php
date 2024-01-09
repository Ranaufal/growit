<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Workspace;
use App\Models\WorkspaceUser;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(Request $request, $id)
    {
        $id = $request->route('id');
        $userid = auth()->user()->id;
        $getuserteam = WorkspaceUser::where('workspace_id',$id)->get();
        $getcode = Workspace::where('id',$id)->get();
        return view('team.index', 
        [
            'team' => $getuserteam,
            'kode' => $getcode,

    ]);
    }
    public function store(Request $request,$id)
    {
        $data = $request->all();
        $email = $data['email'];
        $id = $request->route('id');
        $user = User::where('email', $email)->first();

        if ($user) {
            // make user_workspace 
            $workspace_user = new WorkspaceUser();
            $workspace_user->user_id = $user->id;
            $workspace_user->workspace_id =  $id;
            $workspace_user->save();
            return redirect('team-backend/'.$id);
        } else {
            return redirect('team-backend/'.$id);
        }
    }
    public function destroy(Request $request, $id,$idi)
    {
        $id = $request->route('id');
        WorkspaceUser::destroy($idi);
        return redirect('team-backend/'.$id);

    }
}
