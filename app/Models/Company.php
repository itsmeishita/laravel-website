<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = ['logo', 'company_name', 'slogan', 'website', 'address', 'number', 'email', 'template_code'];
}
