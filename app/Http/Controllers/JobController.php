<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\JobResouce;
use App\Http\Requests\JobRequest;
use App\Repositories\Job\JobRepositoryInterface;

class JobController extends Controller
{

    private $job_repository;

    public function __construct(JobRepositoryInterface $job_repository)
    {
        $this->job_repository = $job_repository;
    }

    public function search(Request $request)
    {
        $jobs = $this->job_repository->search($request->q);
        return JobResouce::collection($jobs);
    }

    public function store(JobRequest $request)
    {
        $data = $request->all();
        $job = $this->job_repository->create($data);
        return new JobResouce($job);
    }

    public function show($id)
    {
        $job = $this->job_repository->find($id);
        return new JobResouce($job);
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $job = $this->job_repository->update($data);
        return new JobResouce($job);
    }

}
