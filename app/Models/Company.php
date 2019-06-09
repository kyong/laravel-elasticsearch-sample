<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use ScoutElastic\Searchable;
use App\Models\Job;
use App\Scout\CompanyIndexConfigurator;

class Company extends Model
{
    use Searchable;
    protected $table = 'companies';
    protected $fillable = [
        'name', 'address'
    ];
    protected $indexConfigurator = CompanyIndexConfigurator::class;

    protected $searchRules = [
        //
    ];
    protected $mapping = [
        'properties' => [
        ]
    ];
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
