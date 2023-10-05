<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus';

    protected $fillable = [
        'id',
        'user_id',
        'space_id',
        'date',
        'title',
        'body',
        'created_at',
        'updated_at'
    ];
}
