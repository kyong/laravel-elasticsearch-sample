<?php
namespace App\Repositories\Job;

use App\Models\Job;

class JobRepository implements JobRepositoryInterface
{
    protected $job;

    /**
    * @param object $job
    */
    public function __construct(Job $job)
    {
        $this->job = $job;
    }

    public function find(int $id)
    {
        return $this->job->find($id);
    }

    public function search(String $keyword)
    {
        return $this->job->search($keyword)->get();
    }

    public function create(array $data)
    {
        return $this->job->create($data);
    }

    public function update(array $data)
    {
        $job = $this->job->findOrFail($data['id']);
        $job->update($data);
        return $job;
    }

}
