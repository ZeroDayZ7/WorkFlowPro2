<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'contract_type',
        'max_hours',
        'hire_date',
        'salary',
        'phone',
        'email',
        'department',
    ];
}
