<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Color;
use Illuminate\Http\Response;

class ColorController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $icons = Color::all();

        return $this->sendResponse($icons->toArray(), 'Colors retrieved successfully.');
    }
}
