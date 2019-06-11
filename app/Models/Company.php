<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use ScoutElastic\Searchable;
use App\Models\Job;

class Company extends Model
{
    protected $table = 'companies';
    protected $fillable = [
        'name', 'address'
    ];

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
