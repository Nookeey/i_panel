<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    use HasFactory;

    protected $table = 'translation';

    protected $fillable = [
        'lang_id',
        'page_id',
        'key',
        'content',
    ];

}
