<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proposal = Proposal::all();
        return view('dashboard-admin.proposal.detail-proposal.proposal-data',[
            'title' => 'Data Proposal - Pradita University\'s Guest Lecturers',
            'proposal' => $proposal
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard-admin.proposal.input-proposal.input-proposal',[
            'title' => 'Input Proposal - Pradita University\'s Guest Lecturers',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'mata_kuliah' => 'required|string',
            'latar_belakang' => 'required|text',
            'tujuan_kegiatan' => 'required|text',
            'file_proposal' => 'required|mimes:pdf,docx,doc|max:2048'
        ]);

        $proposalAwal = [
            'mata_kuliah' => $validatedData['mata_kuliah'],
            'latar_belakang' => $validatedData['latar_belakang'],
            'tujuan_kegiatan' => $validatedData['tujuan_kegiatan'],
            'file_proposal' => $request->file('file_proposal')->store('public/proposal'),
        ];

        Proposal::create($proposalAwal);

        return redirect()->intended(route('proposal.index'))->with('success','Proposal has been successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proposal = Proposal::where('id_proposal',$id)->first();
        return view('dashboard-admin.proposal.edit-proposal.edit-proposal',[
            'title' => 'Edit Proposal - Pradita University\'s Guest Lecturers',
            'proposal' => $proposal
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'mata_kuliah' => 'required|string',
            'latar_belakang' => 'required|text',
            'tujuan_kegiatan' => 'required|text',
            'file_proposal' => 'required|mimes:pdf,docx,doc|max:2048',
            'oldfile_proposal' => 'required'
        ]);

        $proposalAwal = [
            'mata_kuliah' => $validatedData['mata_kuliah'],
            'latar_belakang' => $validatedData['latar_belakang'],
            'tujuan_kegiatan' => $validatedData['tujuan_kegiatan'],
            'file_proposal' => $request->file('file_proposal')->store('public/proposal')
        ];
        if($validatedData['oldfile_proposal']){
            Storage::delete($validatedData['oldfile_proposal']);
        }
        Proposal::where('id_proposal',$id)->update($proposalAwal);

        return redirect()->intended(route('proposal.index'))->with('success','Proposal has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proposal = Proposal::where('id_proposal', $id);
        Storage::delete($proposal->file_proposal);
        $proposal->delete();
        return redirect()->intended(route('proposal.index'))->with('success','Proposal has been successfully deleted');
    }
}
