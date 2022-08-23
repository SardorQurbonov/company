<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    use HasFactory;

    protected $fillable = [
        'enterprise_name',
        'full_name',
        'address',
        'email',
        'website',
        'phone',
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
