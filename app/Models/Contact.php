<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;


    protected $fillable = ['title', 'city',
        'number',
        'composition',
        'pet',
        'budget',
        'interior',
        'name',
        'email',
        'phone',
        'birth_date',
        'employer',
        'income'];
}
