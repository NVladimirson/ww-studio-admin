<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionSidebarModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'category','title','description','category','data'
    ];
}
