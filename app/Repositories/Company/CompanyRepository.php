<?php
namespace App\Repositories\Company;

use App\Models\Company;

class CompanyRepository implements CompanyRepositoryInterface
{
    protected $company;

    /**
    * @param object $company
    */
    public function __construct(User $company)
    {
        $this->company = $company;
    }

}
