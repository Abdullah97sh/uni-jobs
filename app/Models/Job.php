<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'company_email',
        'job_title',
        'company_logo',
        'job_desc',
        'company_city',
        'job_category',
        'job_hours',
        'user_id',
    ];

    public function savedJobs(){
        return $this->hasMany(Saved::class);
    }

    public function appliedJobs(){
        return $this->hasMany(Applied::class);
    }

}
