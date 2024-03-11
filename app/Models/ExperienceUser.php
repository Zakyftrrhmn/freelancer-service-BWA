<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExperienceUser extends Model
{
    // use HasFactory;
    use SoftDeletes;

    public $table = 'experience_user';

    protected $dates = [
        'created_at',
        'deleted_at',
        'updated_at'
    ];

    protected $fillable = [
        'detail_user_id',
        'experience',
        'created_at',
        'deleted_at',
        'updated_at'
    ];
}
