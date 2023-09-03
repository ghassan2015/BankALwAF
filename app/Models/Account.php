<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
    use HasFactory;
    protected $guarded=[];
    use SoftDeletes;

    public function transactions(){
        return $this->hasMany(Transaction::class,'account_id','id');
    }

    public function users(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
