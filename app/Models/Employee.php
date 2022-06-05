<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'avatar','name', 'email',
        'phno', 'ic_number',
        'department_id', 'role_id',
        'shift_type', 'created_by', 'updated_by',
    ];

    /**
     * Get the department for the employee.
     */
    public function department() {
        return $this->belongsTo(Department::class);
    }

    /**
     * Get the role for the employee.
     */
    public function role() {
        return $this->belongsTo(Role::class);
    }
}
