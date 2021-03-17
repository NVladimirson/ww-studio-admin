<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navigations extends Model
{
    use HasFactory;

    protected $table = 'navigations';

    protected $fillable = [
        'parent','group_id','name'
    ];

    public function group(){
        return $this->belongsTo(Groups::class);
    }

    public function sections(){
        return $this->hasMany(Sections::class,'navigation_id','id');
    }
}
