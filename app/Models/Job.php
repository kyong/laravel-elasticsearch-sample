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

    public function company()
    {
        return $this->belongsTo(\App\Models\Company::class, 'company_id', 'id');
    }

    protected $searchRules = [
        //
    ];
    protected $mapping = [
        'properties' => [
            'company_name' => [
                'type' => 'text',
            ],
        ]
    ];

    public function toSearchableArray()
    {
        $array = $this->toArray();
        $array['company_name'] = $this->company->name;
        return $array;
    }
}
