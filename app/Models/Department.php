<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'created_by', 'updated_by',
    ];

    /**
     * Get the employee for the department.
     */
    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}
