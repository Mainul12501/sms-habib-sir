<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use App\Models\Backend\Account\FeeType;
use Illuminate\Http\Request;

class StudentFeeTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.account.fee-types.manage',[
            'feeTypes'=> FeeType::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.account.fee-types.create');
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
        FeeType::saveOrUpdateFeeTypes($request);
        return redirect()->route('fee-types.index')->with('success','Fee Type submit successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $notice=account_notice::find($id);
//        $notice->status=$notice->status==0? '1':'0';
//        $notice->save();
//        return redirect()->route('fee-types.index')->with('success','Status Change successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('backend.account.fee-types.create',[
            'feeType' => FeeType::where('slug', $slug)->first(),
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
        FeeType::saveOrUpdateFeeTypes($request, $id);
        return redirect()->route('fee-types.index')->with('success','Fee Type update successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {

        $notice = FeeType::where('slug', $slug)->first();
        $notice->delete();
        return redirect()->route('fee-types.index')->with('success','Fee Type Delete successfully');
    }
}
