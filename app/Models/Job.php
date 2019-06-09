<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use ScoutElastic\Searchable;
use App\Models\Company;
use App\Scout\JobIndexConfigurator;

class Job extends Model
{
    use Searchable;
    protected $table = 'jobs';
    protected $fillable = [
        'company_id', 'name', 'category', 'detail'
    ];
    protected $indexConfigurator = JobIndexConfigurator::class;

    protected $searchRules = [
        //
    ];
    protected $mapping = [
        'properties' => [
        ]
    ];
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
