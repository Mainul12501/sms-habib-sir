<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use App\Models\Backend\Account\SalaryGrade;
use Illuminate\Http\Request;

class SalaryGradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.account.salary-grades.manage',[
            'salaryGrades'=> SalaryGrade::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.account.salary-grades.create');
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
        SalaryGrade::saveOrUpdateSalaryGrade($request);
        return redirect()->route('salary-grades.index')->with('success','Salary Grade submit successfully');
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
//        return redirect()->route('salary-grades.index')->with('success','Status Change successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('backend.account.salary-grades.create',[
            'salaryGrade' => SalaryGrade::where('slug', $slug)->first(),
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
        SalaryGrade::saveOrUpdateSalaryGrade($request, $id);
        return redirect()->route('salary-grades.index')->with('success','Salary Grade update successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {

        $notice = SalaryGrade::where('slug', $slug)->first();
        $notice->delete();
        return redirect()->route('salary-grades.index')->with('success','Salary Grade Delete successfully');
    }
}
