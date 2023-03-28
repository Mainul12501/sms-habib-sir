<?php

namespace App\Models\Backend\Account;

use App\Models\Backend\Academic\AcademicYear;
use App\Models\Scopes\Searchable;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Expense extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'uploaded_by',
        'academic_year_id',
        'name',
        'date',
        'amount',
        'file',
        'note',
        'status',
    ];

    protected $searchableFields = ['*'];

    public static function saveOrUpdateExpense($request, $id = null)
    {
        Expense::updateOrCreate(['id' => $id], [
            'uploaded_by'   => auth()->id(),
            'academic_year_id'  => $request->academic_year_id,
            'name' => $request->name,
            'date'  => $request->date,
            'amount'    => $request->amount,
            'file'    => isset($id) ? fileUpload($request->file('file'), 'expenses/', 'expense', Expense::find($id)->file) : fileUpload($request->file('file'), 'other-income/', 'income'),
            'note'    => $request->note,
            'status'    => $request->status == 'on' ? 1 : 0,
        ]);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }

    public function academicYear()
    {
        return $this->belongsTo(AcademicYear::class);
    }
}
