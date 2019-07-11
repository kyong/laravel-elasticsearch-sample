<?php
namespace App\Repositories\Job;

interface JobRepositoryInterface
{
    public function find(int $id);
    public function search(String $keyword);
    public function create(array $data);
    public function update(array $data);
}
