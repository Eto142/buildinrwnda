<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'company',
        'country',
        'project_name',
        'sector',
        'estimated_investment',
        'land_required',
        'why_rwanda',
        'business_plan_path',
        'business_plan_name',
    ];
}