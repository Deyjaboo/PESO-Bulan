<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable = [
        'JobTitle', //Get from table Job
        'UserName', //Get from table User
        'Resume',
        'JobID',
        'UserID',
    ];
}
