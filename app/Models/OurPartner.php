<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class OurPartner extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =[
        'HEvent_id',
        'status',
        'slug',
    ];


    protected $primaryKey='HEvent_id';
    
    public function creatorInfo(){
        return $this->belongsTo('App\Models\user','creator','id');
    }

    public function editorInfo(){
        return $this->belongsTo('App\Models\user','editor','id');
    }
}
