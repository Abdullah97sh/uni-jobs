<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saved extends Model
{
    protected $fillable = ['user_id' , 'job_id'];

    use HasFactory;
}
