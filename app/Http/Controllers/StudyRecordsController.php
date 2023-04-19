<?php

namespace App\Http\Controllers;

use App\Models\StudyRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class StudyRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $my_records = StudyRecord::where('user_id', Auth::id())->get();
        return view ('study_record.index', compact('my_records'));

        $keyword = $request->input('keyword');

        // if($keyword)
        // {
        //     $keyword = $request->input('keyword');
        //     $target = $request->input('target');

        //     $posts = StudyRecordsController::when($keyword, function ($query) use ($keyword, $target) {
        //     return $query->where($target, 'like', '%'.$keyword.'%');
        //     })->orderBy('created_at', 'desc')->get();

        //     return view('study_record.index', compact('posts'));
        // }

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

        StudyRecord::create([
            'title' => $request->title,
            'category' => $request->category,
            'user_id' => auth()->id(),
            'content' => $request->content,
            'duration' => $request->duration,
            'status' => $request->status,
            'tag_id' => $request->tag_id,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);


        return to_route('study_record.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $studyRecord = StudyRecord::find($id);
        return view('study_record.show', compact('studyRecord'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = StudyRecord::findOrFail($id);

        return view('study_record.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = StudyRecord::findOrFail($id);

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        return redirect()->route('study_record.show', $post->id);
    }

    /**
     * Update the specified resource in storage.
     */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = StudyRecord::findOrFail($id);
        $post->delete();
        return redirect()->route('study_record.index')->with('success', '投稿が削除されました。');
    }

    public function search()
    {
        return view ('study_record.search');
    }

}
