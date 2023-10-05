<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $fillable = [
        'event_id',
        'date',
        'title',
        'created_at',
        'updated_at'
    ];

    /**
     * 更新処理
     */
    public function eventupdate($request, $event)
    {
        $result = $event->fill([
            'id' => $request->id,
            'date' => $request->date,
            'title'=> $title,
            'updated_at'=> $updated_at
        ])->save();

        return $result;
    }
}
