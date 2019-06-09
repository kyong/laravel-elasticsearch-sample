<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CompanyRequest;
use App\Repositories\Company\CompanyRepositoryInterface;
use App\Http\Resources\CompanyResouce;

class CompanyController extends Controller
{
    private $company_repository;

    public function __construct(CompanyRepositoryInterface $company_repository)
    {
        $this->company_repository = $company_repository;
    }

    public function store(CompanyRequest $request)
    {
        $data = $request->all();
        $company = $this->company_repository->create($data);
        return new CompanyResouce($company);
    }

}
