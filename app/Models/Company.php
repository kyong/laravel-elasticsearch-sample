<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Job;

class Company extends Model
{
    public $table = 'companies';

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
