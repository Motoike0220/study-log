<?php

namespace App\Http\Controllers;

use App\Models\StudyRecord;
use Illuminate\Http\Request;

class StudyRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = StudyRecord::paginate(6);
        return view ('study_record.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('study_record.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(StudyRecord $studyRecord)
    {

            $studyRecord = StudyRecord::find($id);
            return view('study_record.show', ['studyRecord' => $studyRecord]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudyRecord $studyRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudyRecord $studyRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudyRecord $studyRecord)
    {
        //
    }
}
