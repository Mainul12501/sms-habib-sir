<?php

namespace App\Models\Backend\Account;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FeeType extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['fee_type', 'note', 'slug', 'status'];

    protected $searchableFields = ['*'];

    protected $table = 'fee_types';

    public static function saveOrUpdateFeeTypes($request, $id = null)
    {
        FeeType::updateOrCreate(['id' => $id], [
            'fee_type'  => $request->fee_type,
            'note'  => $request->note,
            'slug'  => str_replace(' ', '-', $request->fee_type),
            'status'  => $request->status == 'on' ? 1 : 0,
        ]);
    }

    public function studentFeePayments()
    {
        return $this->hasMany(StudentFeePayment::class);
    }
}
