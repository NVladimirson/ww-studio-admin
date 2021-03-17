<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionContactModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'image','contact_info','contact_phone'
    ];
}
