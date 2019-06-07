<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class Job extends Model
{
    public $table = 'jobs';

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
