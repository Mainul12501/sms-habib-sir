<?php

namespace App\Models\Backend\Administrator;

use App\Models\Scopes\Searchable;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notice extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'uploader_id',
        'title',
        'date',
        'date_timestamp',
        'notice',
        'file',
        'slug',
        'status',
    ];

    protected $searchableFields = ['*'];

    public static function saveOrUpdateNotice($request, $id = null)
    {
        Notice::updateOrCreate(['id' => $id], [
            'uploader_id'   => auth()->id(),
            'title' => $request->title,
            'date'  => $request->date,
            'date_timestamp'    => strtotime($request->date),
            'notice'    => $request->notice,
            'file'  => isset($id) ? fileUpload($request->file('file'), 'notices/', 'notice', Notice::find($id)->file) : fileUpload($request->file('file'), 'notices/', 'notice'),
            'slug'  => str_replace(' ', '-', $request->title),
            'status'    => $request->status == 'on' ? 1 : 0,
        ]);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'uploader_id');
    }
}
