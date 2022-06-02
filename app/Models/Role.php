<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
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
     * Get the role for the employee.
     */
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'role_id');
    }
}
