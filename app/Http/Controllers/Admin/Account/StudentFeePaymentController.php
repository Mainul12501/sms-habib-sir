<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use App\Models\Backend\Academic\AcademicClass;
use App\Models\Backend\Academic\AcademicYear;
use App\Models\Backend\Academic\Section;
use App\Models\Backend\Account\FeeType;
use App\Models\Backend\Account\StudentFeePayment;
use App\Models\Backend\UserManagement\Student;
use Illuminate\Http\Request;

class StudentFeePaymentController extends Controller
{
    public function getStudents (Request $request)
    {
        $students = Student::where('academic_class_id', $request->class_id)->where('section_id', $request->section_id)->where('status', 1)->get();
        if (!$students->isEmpty())
        {
            return response()->json([
                'status' => 'success',
                'students'  => $students
            ]);
        } else {
            return response()->json([
                'status'    => 'empty',
                'message'   => 'No Student Found'
            ]);
        }
    }

    public function searchFeePayment (Request $request)
    {
        $feePaymentsQuery = StudentFeePayment::query();
        $feePaymentsQuery->where('academic_year_id', $request->academic_year_id)->where('academic_class_id', $request->academic_class_id)->where('fee_type_id', $request->fee_type_id)->where('section_id', $request->section_id);
        if (isset($request->month))
        {
            $feePaymentsQuery->where('month', $request->month);
        }
        $feePayments = $feePaymentsQuery->get();
        return back()->with('feePayments', $feePayments);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.account.student-fee-payments.manage',[
//            'feePayments'=> StudentFeePayment::all(),
            'academicYears' => AcademicYear::where('status', 1)->get(),
            'feeTypes' => FeeType::where('status', 1)->get(),
            'classes' => AcademicClass::where('status', 1)->get(),
            'sections' => Section::where('status', 1)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.account.student-fee-payments.create', [
            'academicYears' => AcademicYear::where('status', 1)->get(),
            'feeTypes' => FeeType::where('status', 1)->get(),
            'classes' => AcademicClass::where('status', 1)->get(),
            'sections' => Section::where('status', 1)->get(),
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
//        return $request;
        StudentFeePayment::saveOrUpdateStudentFeePayment($request);
        return redirect()->back()->with('success','Fee Payment submit successfully');
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
//        return redirect()->route('student-fee-payments.index')->with('success','Status Change successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.account.student-fee-payments.create',[
            'academicYears' => AcademicYear::where('status', 1)->get(),
            'feeTypes' => FeeType::where('status', 1)->get(),
            'classes' => AcademicClass::where('status', 1)->get(),
            'sections' => Section::where('status', 1)->get(),
            'feePayment' => StudentFeePayment::where('id', $id)->first(),
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
        StudentFeePayment::saveOrUpdateStudentFeePayment($request, $id);
        return redirect()->route('student-fee-payments.index')->with('success','Fee Payment update successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $notice = StudentFeePayment::where('id', $id)->first();
        $notice->delete();
        return redirect()->route('student-fee-payments.index')->with('success','Fee Payment Delete successfully');
    }
}
