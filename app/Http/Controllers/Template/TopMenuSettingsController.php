<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use App\Services\TopMenuSettingsService;
use Illuminate\Http\Request;

class TopMenuSettingsController extends Controller
{
    /**
     * @var TopMenuSettingsService
     */
    private $topMenuSettingsService;

    public function __construct(TopMenuSettingsService $topMenuSettingsService)
    {
        $this->topMenuSettingsService = $topMenuSettingsService;
    }

    public function store(Request $request)
    {
        $settings = $this->topMenuSettingsService->store($request);

        return response()->json(['settings' => $settings]);
    }
}