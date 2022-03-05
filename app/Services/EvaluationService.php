<?php

namespace App\Services;

use Fhariano\MicroservicesCommon\Services\Traits\ConsumerExternalService;

class EvaluationService
{

    use ConsumerExternalService;

    protected $url;
    protected $token;

    public function __construct()
    {
        $this->url = config('services.micro_02.url');
        $this->token = config('services.micro_02.token');
    }

    /**
     * ID of Company
     * @param  string $company
     */
    public function getEvaluationsCompany(string $company)
    {
        $response = $this->request('get', "/evaluations/{$company}");

        return $response->body();
    }
}
