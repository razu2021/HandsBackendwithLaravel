<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class BecomeVolunteer extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable =[
        'HEvent_id',
        'status',
        'slug',
    ];
}