<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'enterprise_id',
        'passport_seial_number',
        'employee_full_name',
        'position',
        'phone',
        'address',
    ];
}
