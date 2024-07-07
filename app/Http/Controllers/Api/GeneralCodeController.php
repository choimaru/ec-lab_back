<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\GeneralCode;
use App\Services\GeneralCodeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GeneralCodeController extends Controller
{
    protected $generalCodeService;

    public function __construct(GeneralCodeService $generalCodeService)
    {
        $this->generalCodeService = $generalCodeService;
    }

    public function category(string $categoryCode)
    {
        Log::debug($categoryCode);
    }
}
