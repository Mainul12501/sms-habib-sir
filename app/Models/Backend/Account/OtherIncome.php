<?php

namespace App\Models\Backend\Account;

use App\Models\Scopes\Searchable;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OtherIncome extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'uploaded_by',
        'name',
        'date',
        'amount',
        'file',
        'note',
        'status',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'other_incomes';

    public static function saveOrUpdateotherIncome($request, $id = null)
    {
        OtherIncome::updateOrCreate(['id' => $id], [
            'uploaded_by'   => auth()->id(),
            'name' => $request->name,
            'date'  => $request->date,
            'amount'    => $request->amount,
            'file'    => isset($id) ? fileUpload($request->file('file'), 'other-income/', 'income', OtherIncome::find($id)->file) : fileUpload($request->file('file'), 'other-income/', 'income'),
            'note'    => $request->note,
            'status'    => $request->status == 'on' ? 1 : 0,
        ]);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }
}
