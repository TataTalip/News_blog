<?php

namespace App\models\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'id',
        'name',
        'preview',
        'description',
        'user_id',
        'data_create',

    ];


}
