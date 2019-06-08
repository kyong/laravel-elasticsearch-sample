<?php
namespace App\Repositories\Job;

use App\Models\Job;

class JobRepository implements JobRepositoryInterface
{
    protected $job;

    /**
    * @param object $job
    */
    public function __construct(User $job)
    {
        $this->job = $job;
    }

}
