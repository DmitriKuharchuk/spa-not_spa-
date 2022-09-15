<?php

namespace App\Http\Controllers\WhoIs;

use App\Http\Controllers\Controller;
use App\Http\Requests\WhoIs\CheckDomainRequest;
use App\Services\WhoIsService;
use Illuminate\Http\Request;

class WhoIsController extends Controller
{
    public WhoIsService $service;

    public function __construct(WhoIsService $service)
    {
        $this->service = $service;
    }


    public function checkDomain(CheckDomainRequest $request){
        $result = $this->service->checkDomain($request);

        return response()->json($result, 200);
    }
}
