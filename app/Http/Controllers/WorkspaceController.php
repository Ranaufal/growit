<?php

namespace App\Http\Controllers;

use App\Models\Workspace;
use App\Models\MemberKode;
use App\Models\WorkspaceUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class WorkspaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $workspace = Workspace

        return view('pages.workspace', [
            'workspaces' => auth()->user()->workspace_users,
            // 'own-workspaces' => auth()->user()->workspace,
            // $workspaces = DB::table('workspace_users')
            //     ->join('users', 'workspace_users.user_id', '=', 'users.id')
            //     ->select('workspace_users.*', 'users.*')
            //     ->get(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(
            'workspaces.create',
            [
                // 'prodis'=>Prodi::all()
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->all();

        // make workspace 
        $workspace = new Workspace();
        $workspace->workspace_name = $data['name'];
        $workspace->cash_on_hand = $data['coh'];
        $workspace->member_kode = Str::random(6);
        $workspace->owner_id = auth()->user()->id;
        $workspace->save();

        // make user_workspace 
        $workspace_user = new WorkspaceUser();
        $workspace_user->user_id = auth()->user()->id;
        $workspace_user->workspace_id =  $workspace->id;
        $workspace_user->save();

        // $user_workspace = array([
        //     'user_id' => auth()->user()->id,
        //     'workspace_id' => $workspace->id,
        // ]);
        // WorkspaceUser::create($user_workspace);


        // $validatedData = Workspace::create([
        //     'workspace_name' => $request->name,
        //     'member_kode' => Str::random(6),
        //     'owner_id' => auth()->user()->id,
        // ]);



        return redirect('/workspace')->with('pesan', 'Data Berhasil di Simpan');


        // $request->validate([
        //     'name' => 'required|unique:workspaces|max:255',
        // ]);

        // $workspace = new Workspace([
        //     'name' => $request->input('name'),
        // ]);

        // Workspace::auth()->user()->workspaces()->save($workspace);

        // return redirect()->route('workspaces.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Workspace $workspace)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Workspace $workspace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Workspace $workspace)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Workspace $workspace)
    {
        //
    }
}
