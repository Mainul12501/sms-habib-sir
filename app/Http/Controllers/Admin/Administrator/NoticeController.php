<?php

namespace App\Http\Controllers\Admin\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Backend\Administrator\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.administrator.notice.manage',[
            'notices'=> Notice::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.administrator.notice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return $request;
        Notice::saveOrUpdateNotice($request);
        return redirect()->route('notices.index')->with('success','notice submit successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $notice=administrator_notice::find($id);
//        $notice->status=$notice->status==0? '1':'0';
//        $notice->save();
//        return redirect()->route('notice.index')->with('success','Status Change successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('backend.administrator.notice.create',[
            'notice' => Notice::where('slug', $slug)->first(),
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
//        return $request->notice_note;
        Notice::saveOrUpdateNotice($request, $id);
        return redirect()->route('notices.index')->with('success','notice update successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {

        $notice = Notice::where('slug', $slug)->first();
        if (file_exists($notice->file))
        {
            unlink($notice->file);
        }
        $notice->delete();
        return redirect()->route('notices.index')->with('success','notice Delete successfully');
    }
}
