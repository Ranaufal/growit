<?php

namespace App\Http\Controllers;

use App\Models\Workspace;
use App\Models\WorkspaceUser;
use Illuminate\Http\Request;

class WorkspaceUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $enrollcode = $data['enrollcode'];

        $workspace = Workspace::where('member_kode', $enrollcode)->first();

        if ($workspace) {
            // make user_workspace 
            $workspace_user = new WorkspaceUser();
            $workspace_user->user_id = auth()->user()->id;
            $workspace_user->workspace_id =  $workspace->id;
            $workspace_user->save();
            return redirect('/workspace')->with('pesan', 'Code Berhasil di Enroll');
        } else {
            return redirect('/workspace')->with('pesan', 'Code Tidak dapat di Enroll');
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(WorkspaceUser $workspaceUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WorkspaceUser $workspaceUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WorkspaceUser $workspaceUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WorkspaceUser $workspaceUser)
    {
        //
    }
}
