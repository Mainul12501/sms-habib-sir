<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use App\Models\Backend\Academic\AcademicYear;
use App\Models\Backend\Account\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.account.expenses.manage',[
            'expenses' => Expense::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.account.expenses.create', [
            'academicYears' => AcademicYear::where('status', 1)->get(),
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
        Expense::saveOrUpdateExpense($request);
        return redirect()->back()->with('success','Expense created successfully');
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
//        return redirect()->route('expenses.index')->with('success','Status Change successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.account.expenses.create',[
            'expense' => Expense::where('id', $id)->first(),
            'academicYears' => AcademicYear::where('status', 1)->get(),
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
        Expense::saveOrUpdateExpense($request, $id);
        return redirect()->route('expenses.index')->with('success','Income update successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $expense = Expense::where('id', $id)->first();
        if (file_exists($expense->file))
        {
            unlink($expense->file);
        }
        $expense->delete();
        return redirect()->route('expenses.index')->with('success','Expense Delete successfully');
    }
}
