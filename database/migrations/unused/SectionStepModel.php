<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionStepModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'image1','content1','image2','content2','image3','content3'
    ];
}
