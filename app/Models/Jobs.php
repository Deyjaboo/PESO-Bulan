<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;
    protected $fillable = [
        'JobTitle',
        'CompanyName',//Get from table Company
        'CompanyWebsite',//Get from table Company
        'CompanyContact',//Get from table Company
        'NumVacancies',
        'WorkingLocation',
        'Industry',
        'JobDescription',
        'Requirements',
        'DatePosted',
        'logo',//New
        'Status',//New
    ];
}
