<?php

namespace App\Models\Backend\Account;

use App\Models\Backend\Academic\AcademicClass;
use App\Models\Backend\Academic\AcademicYear;
use App\Models\Backend\Academic\Section;
use App\Models\Backend\UserManagement\Student;
use App\Models\Scopes\Searchable;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentFeePayment extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'user_id',
        'student_id',
        'academic_year_id',
        'academic_class_id',
        'section_id',
        'fee_type_id',
        'month',
        'amount',
        'due',
        'status',
        'payment_method',
        'txt_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'student_fee_payments';

    public static function saveOrUpdateStudentFeePayment ($request, $id=null)
    {
        StudentFeePayment::updateOrCreate(['id' => $id], [
            'user_id'   => auth()->id(),
            'student_id'    => $request->student_id,
            'academic_year_id'  => $request->academic_year_id,
            'academic_class_id' => $request->academic_class_id,
            'section_id'    => $request->section_id,
            'fee_type_id'   => $request->fee_type_id,
            'month' => $request->month,
            'amount'    => $request->amount,
            'due'   => $request->due,
            'status'    => $request->status == 'on' ? 1 : 0,
            'payment_method'    => $request->payment_method,
            'txt_id'    => $request->txt_id,
        ]);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function academicYear()
    {
        return $this->belongsTo(AcademicYear::class);
    }

    public function academicClass()
    {
        return $this->belongsTo(AcademicClass::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function feeType()
    {
        return $this->belongsTo(FeeType::class);
    }
}
