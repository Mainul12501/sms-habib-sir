<?php

namespace App\Models\Backend\Account;

use App\Models\Backend\UserManagement\AcademicStuff;
use App\Models\Backend\UserManagement\Teacher;
use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SalaryGrade extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'salary_grade',
        'basic',
        'house_rent',
        'medical',
        'ta_da',
        'others',
        'note',
        'slug',
        'status',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'salary_grades';

    public static function saveOrUpdateSalaryGrade($request, $id = null)
    {
        SalaryGrade::updateOrCreate(['id' => $id], [
            'salary_grade'   => $request->salary_grade,
            'basic' => $request->basic,
            'house_rent'  => $request->house_rent,
            'medical'    => $request->medical,
            'ta_da'    => $request->ta_da,
            'others'    => $request->others,
            'note'    => $request->note,
            'slug'  => str_replace(' ', '-', $request->salary_grade),
            'status'    => $request->status == 'on' ? 1 : 0,
        ]);
    }

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }

    public function academicStuffs()
    {
        return $this->hasMany(AcademicStuff::class);
    }
}
