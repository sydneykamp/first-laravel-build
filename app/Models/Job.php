<?php

namespace App\Models;

use \Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model {
    use HasFactory;
    protected $table = 'job_listings';

    // This says what values are allowed to be filled in
    protected $fillable = ['title', 'salary'];
}