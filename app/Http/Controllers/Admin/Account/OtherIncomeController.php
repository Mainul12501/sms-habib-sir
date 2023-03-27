<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use App\Models\Backend\Account\OtherIncome;
use Illuminate\Http\Request;

class OtherIncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.account.other-incomes.manage',[
            'otherIncomes' => OtherIncome::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.account.other-incomes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        OtherIncome::saveOrUpdateotherIncome($request);
        return redirect()->back()->with('success','Income submit successfully');
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
//        return redirect()->route('other-incomes.index')->with('success','Status Change successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.account.other-incomes.create',[
            'otherIncome' => OtherIncome::where('id', $id)->first(),
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
        OtherIncome::saveOrUpdateotherIncome($request, $id);
        return redirect()->route('other-incomes.index')->with('success','Income update successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $income = OtherIncome::where('id', $id)->first();
        if (file_exists($income->file))
        {
            unlink($income->file);
        }
            $income->delete();
        return redirect()->route('other-incomes.index')->with('success','Income Delete successfully');
    }
}
