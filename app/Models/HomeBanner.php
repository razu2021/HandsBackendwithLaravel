<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class HomeBanner extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =[
        'ban_id',
        'ban_status',
        'ban_slug',
    ];
}
