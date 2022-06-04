<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'site_name', 'postal_code', 'ma_name','ma_contact_email','company_name',
        'mcst_number', 'ma_contact_number',
        'shift_type', 'created_by', 'updated_by',
    ];
}
