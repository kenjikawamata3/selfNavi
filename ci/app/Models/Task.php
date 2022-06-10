<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // laravelがアクセスできるパラメーターを制御
    protected $fillable = [
        'title',
        'content',
        'person_in_charge',
    ];
}
