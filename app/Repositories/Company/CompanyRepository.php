<?php
namespace App\Repositories\Company;

use App\Models\Company;

class CompanyRepository implements CompanyRepositoryInterface
{
    protected $company;

    /**
    * @param object $company
    */
    public function __construct(Company $company)
    {
        $this->company = $company;
    }

    public function create(array $data)
    {
        return $this->company->create($data);
    }

}
